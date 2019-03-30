<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\Publication;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = Subscriber::All();
        $pubs = Publication::All();

        return view('/tasks/books/subscribers/index', compact('subs', 'pubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'start' => ['required', 'integer', 'between:1,12'],
            'duration' => ['required', 'integer', 'between:1,12'],
            'publication_code' => ['required', 'max:255'],
            'count' => ['required', 'integer', 'between:1,20']
        ]);


        $publication = Publication::where('code', $attributes['publication_code'])->firstOrFail();
        //$subscriber = Subscriber::create($attributes);

        //dd($publication);

        $publication->addSubscriber($attributes);

        return redirect('tasks/books/subscribers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        return view('/tasks/books/subscribers/show', compact('subscriber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        return view('/tasks/books/subscribers/edit', compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return redirect('tasks/books/subscribers');
    }
}
