<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ToDo;
use App\Slogan;

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
    public function index(Request $request)
    {
        // All todo's in an array
        if($request->session()->get('todos') || $request->session()->has('todos')) {
            
            $request->session()->put('todos', $request->session()->get('todos'));
            $todos = $request->session()->get('todos');
        }
        else 
        {
            $todos = ToDo::where('userId', Auth::user()->id)->get();
        }
         
        $motivationalslogan = Slogan::where('id', 1)->get(); 
        
        return view('home', compact('todos', 'motivationalslogan'));
    }
}
