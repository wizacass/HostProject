<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Subscriber;

class BooksDataController extends Controller
{
    public function home()
    {
        $pubs = Publication::All();
        // $subs = Subscriber::All();
        $sum = $this->CalculateAverage($pubs);

        //dd($pubs->count());

        return view('tasks/books/data', compact('sum'));
    }

    private function CalculateAverage($pubs)
    {
        $sum = 0;

        foreach ($pubs as $pub)
        {
            $sum += $pub->profit;
        }

        $avg = $sum / $pubs->count();

        //return $pubs->count();

        return number_format($sum * 0.01, 2).'$';
    }
}
