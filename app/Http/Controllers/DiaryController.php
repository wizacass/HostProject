<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function home()
    {
        return view('diary/index');
    }
}
