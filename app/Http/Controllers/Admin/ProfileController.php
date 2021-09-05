<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $articles=Article::all();
        return view('profile.index',compact('articles'));

    }


    public function userslist()
    {
        $users=User::all();
        return view('profile.users',compact('users'));
    }

    public function adduserform()
    {
        return view('profile.adduser');

    }

    public function adduser(Request $request)
    {
        $validdata=$request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:4',
        ]);
        $validdata['password']=bcrypt($request['password']);
        if ($request->has('isverify')){
            $validdata['email_verified_at']=now();
        }else{
            $validdata['email_verified_at']=null;
        }

        User::create($validdata);
        return redirect(route('users.list'));
    }


    public function usereditform(User $user)
    {
        return view('profile.edituser',compact('user'));

    }

    public function useredit(Request $request,User $user)
    {
        $validatedata=$request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users')->ignore($user['id'])],
            'password'=>'required',

        ]);
        $validatedata['password']=bcrypt($request['password']);

        if ($request->has('isverify')){
            $validatedata['email_verified_at']=now();
        }else{
            $validatedata['email_verified_at']=null;
        }
        $user->update($validatedata);
        return redirect(route('users.list'));


    }
    //
}
