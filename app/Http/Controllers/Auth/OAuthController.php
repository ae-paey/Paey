<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Company;
use Socialite;
use App\Http\Controllers\Controller;

class OAuthController extends Controller
{
  public function redirectToGitHub()
  {
    return Socialite::driver('github')->redirect();
  }

  public function handleGitHubCallback()
  {
    $userSocial = Socialite::driver('github')->user();

    $findUser = User::where('email',$userSocial->email)->first();

    if($findUser) {
      Auth::login($findUser);

      return redirect('/home');
    }else {
      $user = new User;

      $user->name = $userSocial->name;
      $user->email = $userSocial->email;
      $user->password = bcrypt($userSocial->token);
      $user->created_at = now();
      $user->updated_at = now();
      $user->save();

      Auth::login($user);

      return redirect('/home');
    }
  }

  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  public function handleGoogleCallback()
  {
    $userSocial = Socialite::driver('google')->user();

    $findUser = User::where('email',$userSocial->email)->first();

    if($findUser) {
      Auth::login($findUser);

      return redirect('/home');
    }else {
      $user = new User;

      $user->name = $userSocial->name;
      $user->email = $userSocial->email;
      $user->password = bcrypt($userSocial->token);
      $user->created_at = now();
      $user->updated_at = now();
      $user->save();

      Auth::login($user);

      return redirect('/home');
    }
  }
}
