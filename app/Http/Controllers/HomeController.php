<?php

namespace App\Http\Controllers;

use App\Mail\ProfileMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
      $user = auth()->user();
      if (!$user->company) {
        Mail::to($user->email)->send(new ProfileMail($user));
      }
      
      return view('dashboard');
    }
}
