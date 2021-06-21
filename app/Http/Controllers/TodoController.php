<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

  public function index()
  {
    $Todos = Todo::orderBy('created_at', 'asc')->get();
    //dd($tasks);
    return view('index', compact('Todos'));
  }
  
  public function create(Request $request)
  {
    $this->validate($request, Todo::$rules);
    $Todo = new Todo;
    $form = $request->all();
    unset($form['_token_']);
    $Todo->fill($form)->save();
    return redirect('/');
  }

  public function update(Request $request)
  {
    $this->validate($request, Todo::$rules);
    //dd($this);
    $Todo = Todo::find($request->id);
    //dd($this);
    $form = $request->all();
    unset($form['_token_']);
    $Todo->fill($form)->save();
    return redirect('/');
  }

  public function delete(Request $request)
  {
    Todo::find($request->id)->delete();
    return redirect('/');
  }
}
