<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use 

class AdminLoginController extends Controller
{
	protected $redirectTo = 'admin/dashboard';

	public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   public function login(){

   		return view('admin.auth.login');
   }

   public function loginAdmin(){
   		return view('admin.auth.dashboard');
   }
   
}
