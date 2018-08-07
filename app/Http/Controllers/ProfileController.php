<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	App\Http\Requests\UserUpdateFormRequest;
use Auth;       


class ProfileController extends Controller
    {
	public function	edit() {				
		$user	=	Auth::user();
        return view('auth/profile',compact('user'));
    }

   /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address'=>'required|string|max:255',
            'phone'=>'required',
            'role'=>'required',
        ]);
    }/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function update(UserUpdateFormRequest	$request) {	
        $user   =   Auth::user();
        //$user = User::whereId()
         $this->validate(request(), [
             'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'address'=>'required|string|max:255',
            'phone'=>'required',
            'role'=>'required',
        ]);			
        
    	$user->name	= $request->get('name');		
        $user->email = $request->get('email');	
        $user->password	= $request->get('password');
        $user->address	= $request->get('address');
        $user->phone =	$request->get('phone');
        $user->role	=	$request->get('role');											
        //$user->slug	=	Str::slug($request->get('title'),	'-');
		$user->save();				
		//$user->categories()->sync($request->get('categories'));
		return back();
	}
		//return	redirect(action('ProfileController@update',	$user->id))->with('status',	' The	users	has	been	updated!');
    /*protected function update(array $data)
    {
        return User::update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address'=>$data['address'],
            'phone'=>$data['phone'],
            'role'=>$data['role'],
        ]);
    }
    */

}
