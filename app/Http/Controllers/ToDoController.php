<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function filter(Request $request){
        if ($request->priority = 1){
            $priorityFilter = "->where('priority', 1)";
        }
        if ($request->priority = 2){
            $priorityFilter = "->where('priority', 2)";
        }
        if ($request->priority = 3){
            $priorityFilter = "->where('priority', 3)";
        }
        else{
            $priorityFilter = "";
        }
    }


}
