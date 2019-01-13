<?php

namespace App\Http\Controllers\Teacher\Auth;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
use Auth;


class AuthController extends Controller
{

      use AuthenticatesUsers;

      public function __construct()
      {
          $this->middleware('guest:teacher')->except('logout');
      }

      protected $redirectTo = '/teacher/dashboard';

         public function showLoginForm()
         {
             return view('frontend.teacher.auth.login');
         }

         protected function attemptLogin(Request $request)
         {    

             return $this->guard()->attempt(
                 $this->credentials($request), $request->filled('remember')
             );
            
         }
         public function logout(Request $request)
         {
             $this->guard()->logout();

             //$request->session()->invalidate();

             return redirect('/');
         }

         /**
          * Get the guard to be used during authentication.
          *
          * @return \Illuminate\Contracts\Auth\StatefulGuard
          */
         protected function guard()
         {
             return Auth::guard('teacher');
         }
}
