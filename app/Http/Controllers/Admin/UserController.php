<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:show-users')->only('index');
        $this->middleware('can:create-user')->only(['create','store']);
        $this->middleware('can:delete-user')->only(['destroy']);
        $this->middleware('can:edit-user')->only(['edit','update']);
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('profile.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.adduser');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validdata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:4',
        ]);
        $validdata['password'] = bcrypt($request['password']);
        if ($request->has('isverify')) {
            $validdata['email_verified_at'] = now();
        } else {
            $validdata['email_verified_at'] = null;
        }

        if ($request->has('isstaff')){
            $validdata['is_staff'] = 1;

        }else{
            $validdata['is_staff'] = 0;

        }

        User::create($validdata);
        return redirect(route('users.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('profile.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedata = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user['id'])],
            'password' => 'required',

        ]);
        $validatedata['password'] = bcrypt($request['password']);
        $user->permissions()->sync(\request('permissions'));

        if ($request->has('isverify')) {
            $validatedata['email_verified_at'] = now();
        } else {
            $validatedata['email_verified_at'] = null;
        }

        if ($request->has('isstaff')) {
            $validatedata['is_staff'] = 1;

        } else {
            $validatedata['is_staff'] = 0;
        }
        $user->update($validatedata);
        return redirect(route('users.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.list'));

        //
    }
}
