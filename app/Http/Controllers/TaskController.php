<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Import Task model------------------

class TaskController extends Controller
{
    //TaskController
    public function store(Request $request){
        //dd($request->all());

        $task = new Task;  //Task is model name. mpdel is interacy with database-----------------------------------

            $this->validate($request,[
                'task'=>'required|max:100|min:5',
            ]);

            $task->task=$request->task;
            $task->save();
            return redirect()->back();
    }

}
