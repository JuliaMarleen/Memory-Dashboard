<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ToDo;
use App\Slogan;
use App\User;

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

        if (Auth::user()->id = null){
            $color->color = 0;
        }else{
            $color = User::where('id', Auth::user()->id)->get();
        }

        
        return view('home', compact('todos', 'motivationalslogan', 'color'));
    }
}
