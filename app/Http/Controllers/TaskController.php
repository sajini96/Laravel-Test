<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::latest()->simplePaginate(perPage: 3);
        return view('home',[
            'tasks' => $tasks
        ]);
    }
    
    public function create(){
        return view('tasks.create');
    }
    
    public function store(){
        request()->validate([
            'title'=> ['required','min:6']
        ]);
        
        Task::create([
            'title'=>request('title')
        ]);
        
        return redirect('/');
    }
    
    public function edit(Task $task){
        return view('tasks.edit', ['task' => $task]);
    }
    
    public function statusupdate(Task $task){
        $task->update([
            'is_completed'=> 1
        ]);
        
        return redirect('/');
    }
    
    
    public function update(Task $task){
        request()->validate([
            'title'=> ['required','min:6']
        ]);
        
        
        $task->update([
            'title'=>request('title'),
            'is_completed'=> 0
        ]);
        
        return redirect('/');
    }
    
    public function destroy(Task $task){
        $task->delete();
        
        return redirect('/');
    }
}
