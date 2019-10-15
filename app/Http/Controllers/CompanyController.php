<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('profile.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $this->validate(request(),
      [
        'name' => 'required',
        'email' => 'required|email',
        'position' => 'required',
        'location' => 'required',
        'phone' => 'required',
        'ae_address' => 'required|min:12',
        'bank_name' => 'required|min:3',
        'baccount_name' => 'required|min:5',
        'baccount_no' => 'required|min:9'
      ]);

      $company = new Company();
      $company->user_id = auth()->user()->id;
      $company->name = request('name');
      $company->email = request('email');
      $company->position = request('position');
      $company->location = request('location');
      $company->phone = request('phone');
      $company->ae_address = request('ae_address');
      $company->bank_name = request('bank_name');
      $company->baccount_name = request('baccount_name');
      $company->baccount_no = request('baccount_no');

      $company->save();

      $user = User::where('id', $company->user_id)->first();
      $user->company = true;
      $user->save();

      Mail::to($user->email)->send(new VerifyMail($user, $company));

      return redirect()->route('profile.edit')->withStatus(__('Company successfully Added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
      return view('profile.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Company $company)
    {
      $this->validate(request(),
      [
        'name' => 'required',
        'email' => 'required|email',
        'position' => 'required',
        'location' => 'required',
        'phone' => 'required',
        'ae_address' => 'required|min:12',
        'bank_name' => 'required|min:3',
        'baccount_name' => 'required|min:5',
        'baccount_no' => 'required|min:9'
      ]);

      $company->user_id = auth()->user()->id;
      $company->name = request('name');
      $company->email = request('email');
      $company->position = request('position');
      $company->location = request('location');
      $company->phone = request('phone');
      $company->ae_address = request('ae_address');
      $company->bank_name = request('bank_name');
      $company->baccount_name = request('baccount_name');
      $company->baccount_no = request('baccount_no');

      $company->save();

      return redirect()->route('profile.edit')->withStatus(__('Company successfully Updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
