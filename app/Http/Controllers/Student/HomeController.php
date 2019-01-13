<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Hash;


class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return "this is  student dashboard";
    }
}
