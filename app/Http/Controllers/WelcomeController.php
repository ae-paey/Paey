<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
  public function index()
  {
    return view('welcome');
  }

  public function contact(Request $request)
  {
    $this->validate($request, [
			'name' => 'required',
      'email' => 'required|email',
      'subject' => 'required',
			'message' => 'required'
    ]);
    
    Contact::create($request->all());

		Mail::send(new ContactMail($request));

 		return back()->with('success', 'Contact form successfully submitted. Thank you, We will get back to you soon!');
  }
}
