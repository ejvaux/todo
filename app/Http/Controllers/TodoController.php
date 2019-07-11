<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function input()
    {
        return view('input');
    }
    public function validation(TodoRequest $request)
    {
        $validated = $request->validated();
        /* dd($validated); */
        return view('confirm',compact('validated'));
    }
    public function insert(Request $request)
    {
        $todo = new Todo;
        $todo->date = $request->date;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        
        return view('complete', ['success' => 'Successfully created todo']);
    }
}
