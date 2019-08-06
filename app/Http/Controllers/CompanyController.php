<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(User $user){
      $user = auth()->user();

      return view('profile.company', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function updateCompany(Request $request, User $user)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'position' => 'required',
        'location' => 'required',
        'phone' => 'required'
      ]);
      
      $company = Company::where('user_id', auth()->user()->id)->first();

      if(isset($company) ){
        $user = $company->user;
        if(!$user->verified) {
          $company->user->verified = 1;
          $company->user->save();
        }
        Company::update(
          $company->name = $request->get('name'),
          $company->email = $request->get('email'),
          $company->position = $request->get('position'),
          $company->location = $request->get('location'),
          $company->phone = $request->get('phone'),
        );
      }

      return back()->withStatus(__('Company successfully updated'));
    }

    public function account(User $user)
    {
      $user = auth()->user();

      return view('profile.account', compact('user'));
    }

    /**
     * Change the account
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function updateAccount(Request $request)
    {
      $this->validate($request,
      [
        'ae_address' => 'required|min:12',
        'bank_name' => 'required|min:3',
        'baccount_name' => 'required|min:5',
        'baccount_no' => 'required|min:9'
      ]);

      $user = auth()->user();

      $user->ae_address = request('ae_address');
      $user->bank_name = request('bank_name');
      $user->baccount_name = request('baccount_name');
      $user->baccount_no = request('baccount_no');

      $user->update();

      return back()->withStatus(__('Account successfully updated'));
    }
  }