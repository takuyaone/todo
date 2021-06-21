<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function add(Request $request)
  {
    return view('add');
  }
  public function create(Request $request)
  {
    $this->validate($request, Todo::$rules);
    $Todo = new Todo;
    $form = $request->all();
    unset($form['_token_']);
    $Todo->fill($form)->save();
    return redirect('add');
  }

  public function edit(Request $request)
  {
    $Todo = Todo::find($request->id);
    return view('edit', ['form' => $Todo]);
  }
  public function update(Request $request)
  {
    $this->validate($request, Todo::$rules);
    $Todo = Todo::find($request->id);
    $form = $request->all();
    unset($form['_token_']);
    $Todo->fill($form)->save();
    return redirect('add');
  }


  public function delete(Request $request)
  {
    $Todo = Todo::find($request->id);
    //dd($Todo);
    return view('delete', ['form' => $Todo]);
  }

  public function remove(Request $request)
  {
    Todo::find($request->id)->delete();
    return redirect('add');
  }
}
