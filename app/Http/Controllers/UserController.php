<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        $user = Auth::user();
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user, UserFormRequest $request)
    {
        $user = Auth::user();
        return view('users.update', compact('user'));
    }

    // public function update($id, UserFormRequest $request)
    // {
    //     $this->validate(request(), [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|confirmed'
    //     ]);

    //     $user->name = request('name');
    //     $user->email = request('email');
    //     $user->password = bcrypt(request('password'));

    //     $user->save();

    //     return back();
    // }
}
