<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home()
    {
        return view('tasks/index');
    }

    public function store()
    {
        dd('new entry added');
    }
}
