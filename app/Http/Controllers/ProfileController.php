<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
      return view('profile.edit', compact('user'));
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
      auth()->user()->update(['password' => Hash::make($request->get('password'))]);

      return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\CompanyRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCompany(CompanyRequest $request)
    {
      auth()->user()->update($request->all());

      return back()->with('companyUpdate', 'Company successfully updated');
    }

    /**
     * Change the account
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    
    public function account(User $user)
    {
      $this->validate(request(),
      [
        'ae_address'=>'required',
        'bank_name'=>'required',
        'baccount_name'=>'required',
        'baccount_no'=>'required',
      ]);

      $user->ae_address = request('ae_address');
      $user->bank_name = request('bank_name');
      $user->baccount_name = request('baccount_name');
      $user->baccount_no = request('baccount_no');

      $user->save();

      return back()->with('accountUpdate', 'Account successfully updated');
    }
}
