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
}
