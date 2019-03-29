<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Subscriber;

class BooksDataController extends Controller
{
    public function home()
    {
        // $pubs = Publication::All();
        // $subs = Subscriber::All();

        //dd($pubs->count());

        return view('tasks/books/data');
    }
}
