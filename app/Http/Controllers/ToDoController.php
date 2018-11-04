<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ToDo;

class ToDoController extends Controller
{
    //
    public function save(Request $request)
    {
        // Make new to do instance
        $todo = new ToDo;
        $todo->userId = \Auth::user()->id;
        $todo->name = $request->name;
        $todo->priority = $request->priority;
        $todo->done = 0;

        // Save the new record
        $todo->save();

        // Redirect to homepage
        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        $todo = ToDo::where('id', '=', $request->id)->first();
            if ($todo->done === 0){
                $todo->done = 1;
            }
            else {
                $todo->done = 0;
            }

        // Save the new record
        $todo->save();

        // Redirect to homepage
        return redirect()->route('home');
    }

    public function delete(Request $request)
    {
        $todo = ToDo::where('id', '=', $request->id)->delete();

        // Redirect to homepage
        return redirect()->route('home');
    }

    public function filter(Request $request){

        $filter = $request->filtervalue;

        if ($filter == 1 || $filter == 2 || $filter == 3) 
        {
            $todos = ToDo::where('userId', Auth::user()->id)->where('priority', $filter)->get();
            // Redirect to homepage
            //return view('home')->with('todos', $todos);
        }
        else
        {
            $todos = ToDo::where('userId', Auth::user()->id)->get(); 
            //return view('home', compact('todos'));
        }

        return redirect('home')->with(['todos' => $todos]);

    }

    public function search(Request $request){

        $search = $request->get('searchvalue');

        $todos = ToDo::where('userId', Auth::user()->id)->where('name', 'like', '%' . $search . '%')->get();

        // Redirect to homepage
        return view('home')->with('todos', $todos);
    }

    public function all(Request $request){
        $todos = ToDo::where('userId', Auth::user()->id)->get(); 
        
        return view('home', compact('todos'));
    }

}
