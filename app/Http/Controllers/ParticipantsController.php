<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class ParticipantsController extends Controller
{
    public $langList = [
            'C#',
            'C++',
            'Pascal',
            'COBOL',
            'Fortran',
            'Assembler',
        ];

    public function home()
    {
        $participants = Participant::all();
        $languages = $this->langList;

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

        $languages = request()->language;
        $lStr = "";
        foreach ($languages as $lang => $value)
        {
            $lStr = $lStr . $this->langList[$lang - 1] . ' ';
        }
        $attributes['language'] = $lStr;

        Participant::create($attributes);

        return redirect('/tasks/validation');
    }
}
