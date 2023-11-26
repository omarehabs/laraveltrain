<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;


class TodosController extends Controller
{
    public function index()
    {
        $not_finished = Todo::where('finished', '=', 0)->get();
        $finished = Todo::where('finished', '=', 1)->get();
        return view('home', ['finished' => $finished, 'not_finished' => $not_finished]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required'
        ]);
        $todo = new Todo();
        $todo->todo = $request->todo;
        if ($request->finished == 'on') {

            $todo->finished = 1;
        } else {
            $todo->finished = 0;
        }
        $todo->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }
    public function mark_finished($id)
    {
        
        $todo = Todo::find($id);
        $todo->finished  = 1;
        $todo->save();
        return redirect('/');
    }
}
