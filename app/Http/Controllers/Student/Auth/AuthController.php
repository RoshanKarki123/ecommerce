<?php

namespace App\Http\Controllers\Student\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
use Validator;
use Auth;

class AuthController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/student/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

     public function showLoginForm()
     {
         return view('frontend.student.auth.login');
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
         return Auth::guard('student');
     }
}
