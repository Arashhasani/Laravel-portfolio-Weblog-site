<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        $googleuser=Socialite::driver('google')->user();
        $user=User::where('email',$googleuser['email'])->first();
        if ($user){
            auth()->loginUsingId($user['id']);
        }else{
            $newuser=User::create([
                'name'=>$googleuser['name'],
                'email'=>$googleuser['email'],
                'password'=>bcrypt(Str::random(16)),
            ]);
            auth()->loginUsingId($newuser['id']);

        }

        return redirect(route('profile'));

    }
    //
}
