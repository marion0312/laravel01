<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create()
    {
        return view('create');
    }

    public function index()
    {
        return view('home');
    }

    public function task($user)
    {
        $user = \App\User::find($user);
        // dd( $user->tasks );
        return view('task', [ "user" => $user ]);
    }

    public function store()
    {
        // validation
        $data = request()->validate([
            'tasks' => 'required',
            'remarks' => ''
            ]);

        
        
        // save to database using the validated form
        // \App\Task::create($data);

        auth()->user()->tasks()->create($data);

        return redirect('/task/' . auth()->user()->  id); 
        
        // save to database manually if need to change values
        // \App\Post::create([
        //     'task' => $data['task'],
        //     'remarks' => 'This is a manually added data'
        // ]);

        // dd(request()->all());
    }

    public function delete($id) {
        $task = \App\Task::findOrFail( $id );
        $task->delete();
        
        return redirect('/task/' . auth()->user()->  id); 
    }
}
