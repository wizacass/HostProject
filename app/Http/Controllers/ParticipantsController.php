<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class ParticipantsController extends Controller
{
    public function home()
    {
        $languages = [
            'C#',
            'C++',
            'Pascal',
            'COBOL',
            'Fortran',
            'Assembler',
        ];

        $participants = Participant::all();

        return view('tasks.validation', compact('participants', 'languages'));
    }

    public function store()
    {
        // $attributes = request()->validate([
        //     'name' => ['required', 'regex:[a-zA-z]', 'min:3'],
        //     'surname' => ['required', 'regex:[a-zA-z]', 'min:3'],
        //     'school' => ['required', 'regex:[a-zA-z]', 'min:3'],
        //     'age' => ['required', 'numeric']
        // ]);

        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'surname' => ['required', 'min:3'],
            'school' => ['required', 'min:3'],
            'age' => ['required', 'numeric'],
            'language'
        ]);

        dd(request()->all());

        Participant::create($attributes);

        //dd(request());
        //dd(Participant::All());

        return redirect('/tasks/validation');
    }
}
