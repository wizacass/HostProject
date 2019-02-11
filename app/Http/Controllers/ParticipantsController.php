<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class ParticipantsController extends Controller
{
    public function index()
    {
        $participants = Participant::all();

        return view('tasks.validation', compact('participants'));
    }

     public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
        Participant::create($attributes);

        return redirect('/tasks/validation');
    }
}
