<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect(RouteServiceProvider::HOME);

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'first_name' => $user->user['family_name'],
                    'last_name' => $user->user['given_name'],
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                    'avatar' => $user->avatar
                ]);

                Auth::login($newUser);

                return redirect(RouteServiceProvider::HOME);
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
