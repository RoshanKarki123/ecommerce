<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Routing\Controller ;
use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
     public function showLoginForm()
     {
       return view('backend.admin.auth.login');
     } 

     public function submitLoginForm(Request $request)
     {
     	$credentials = $request->only('email', 'password');
     	$remember=$request->has('remember')?true:false;
          if (Auth::guard('admin')->attempt($credentials,$remember)) {
                    return "true";
                }
                else
                {
                          return "fasle";
                }
       return view('backend.admin.auth.login');
     } 
}