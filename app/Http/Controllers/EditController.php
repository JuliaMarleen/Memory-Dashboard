<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Slogan;

class EditController extends Controller
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

    public function save(Request $request)
    {
        // Make new to do instance
        $slogan = new Slogan;
        $slogan->title = $request->title;
        $slogan->slogan = $request->slogan;
        $slogan->image = $request->image;

        // Save the new record
        $slogan->save();

        // Redirect to homepage
        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        $slogan = Slogan::where('id', '=', $request->id)->first(); 
            $slogan->title = $request->title;
            $slogan->slogan = $request->slogan;
            $slogan->image = $request->image;

        // Save the new record
        $slogan->save();

        // Redirect to homepage
        return redirect()->route('home');
    }
}