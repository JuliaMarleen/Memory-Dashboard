<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ToDo;
use App\User;

class ColorController extends Controller
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
        $motivationalslogan = Slogan::select('title', 'slogan', 'image', 'id')->get(); 
        
        return view('edit', compact('todos', 'motivationalslogan'));
    }

    public function update(Request $request)
    {
        $todo = ToDo::where('userId', Auth::user()->id)->count();

        // $number = $todo.length;
        if ($todo >= 5){
            
            $user = User::find(Auth::user()->id);
            $user->color = $request->color;
            $user->save();
        }
        else {
            return redirect()->route('home');
        }

        // Redirect to homepage
        return redirect()->route('home');
    }
}