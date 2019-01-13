<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Hash;


class HomeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:teacher');
  }
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
        return "this is teacher dashboard";
    }
}
