<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD
      public function logout() {
        Auth::logout();
        return Redirect::away('login');
    }
=======
>>>>>>> 67dd67153f16cdc53dfcdfaa1e04f3dfabe55f93
}
