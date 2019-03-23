@extends('layouts/main')

@section('title', 'Books task')

@section('heading', 'Publication')

@section('content')

<ul>
    <li>{{ $publication->name }}</li>
    <li>{{ $publication->code }}</li>
    <li>{{ $publication->price }}</li>
</ul>

{{-- <form action="/tasks/books/publications/{{ $publication->id }}/edit">
    @csrf
    <button class="button is-info is-rounded" type="submit">Edit</button>
</form> --}}

@endsection
