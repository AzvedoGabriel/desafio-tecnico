<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

    }

    public function create(Request $request){
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('task.create', $data);
    }

    public function create_action(Request $request){
        $task = $request->only(['title', 'category_id', 'description', 'due_data']);
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $request){
        $id = $request->id;


        $task = Task::find($id);
        if (!$task){
            return redirect(route('home'));
        }

        $data['task']=$task;
        return view('task.edit');
    }

    public function delete(Request $request){
        return redirect(route('home'));
    }
}
