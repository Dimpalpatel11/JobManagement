<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\JobApplication;
use Illuminate\Support\Facades\Input;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = JobApplication::all();
        return view('home',compact('jobs'));
    }
}
