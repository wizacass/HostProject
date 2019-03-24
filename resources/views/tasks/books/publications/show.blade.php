@extends('layouts/books')

@section('title'))

    {{ $publication->name }}

@endsection

@section('heading', 'Publication')
@section('back-link', '/tasks/books/publications')
@section('back-text')

    <b>UP</b>

@endsection

@section('content')

<ul>
    <li>{{ $publication->name }}</li>
    <li>{{ $publication->code }}</li>
    <li>{{ $publication->getPrice() }}</li>
</ul>

{{-- <form action="/tasks/books/publications/{{ $publication->id }}/edit">
    @csrf
    <button class="button is-info is-rounded" type="submit">Edit</button>
</form> --}}

@endsection
