<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // All todo's in an array
        $todos = ToDo::all();
        
        return view('home', compact('todos'));
    }
}
