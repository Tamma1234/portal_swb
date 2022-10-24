<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator, Redirect, Response, File;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialController extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callback(Request $request)
    {
        $user = Socialite::driver('google')->stateless()->user();
        $user = User::where('user_email', $user->email)->first();
//        dd($user);
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }
    }
}
