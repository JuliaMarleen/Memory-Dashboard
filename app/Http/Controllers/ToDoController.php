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

    public function delete(Request $request)
    {
        $todo = ToDo::where('id', '=', $request->id)->delete();

        // Redirect to homepage
        return redirect()->route('home');
    }

    // public function sort(Request $request){
    //     $todo = ToDo::where('id', '=', $request->id)->first();
    //     // $collection = collect([
    //     //     ['name' => 'Desk', 'price' => 200],
    //     //     ['name' => 'Chair', 'price' => 100],
    //     //     ['name' => 'Bookcase', 'price' => 150],
    //     // ]);
        
    //     $sorted = $collection->sortBy('price');
        
    //     $sorted->values()->all();
    // }

}
