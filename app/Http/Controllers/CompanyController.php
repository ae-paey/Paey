<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function updateCompany(Request $request, Company $company)
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

      return back()->with('companyUpdate', 'Company successfully updated');
    }

    /**
     * Change the account
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function account(Company $company, $id)
    {
      $company = Company::findOrFail($id);

      $this->validate(request(),
      [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
      ]);

      if(isset($company) ){
        $user = $company->user;
        if(!$user->verified) {
          $company->user->verified = 1;
          $company->user->save();
        }
      }

      $company->ae_address = request('ae_address');
      $company->bank_name = request('bank_name');
      $company->baccount_name = request('baccount_name');
      $company->baccount_no = request('baccount_no');

      $company->save();

      return redirect('profile.edit')->with('accountUpdate', 'Account successfully updated');
    }

    public function updateC(Profile $profile)
    {
      $this->validate(request(),
      [
        'title'=>'required',
        'name'=>'required',
        'location'=>'required',
        'date'=>'required',
        'time'=>'required',
        'description'=>'required',
      ]);

      $profile->title = request('title');
      $profile->slug = str_slug(request('title'),'-');
      $profile->name = request('name');
      $profile->location = request('location');
      $profile->date = request('date');
      $profile->time = request('time');
      $profile->description = request('description');

      if(request('image')) {
        $image = request('image');
        $imageName = time().$image->getClientOriginalName();
        $image->move('uploads/pro$profiles/images/',$imageName);
        $profile->image = 'uploads/pro$profiles/images/'.$imageName;
      }

      $profile->save();

      return back()->withPasswordStatus(__('Password successfully updated.'));
    }
  }