<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function home()
    {
        return view('/apps/index');
    }

    public function binary()
    {
        return view('/apps/binary');
    }
}
