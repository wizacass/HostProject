@extends('layouts/main')

@section('title', 'Books task')

@section('heading', 'Subscriber')

@section('content')

<ul>
    <li>{{ $subscriber->name }}</li>
    <li>{{ $subscriber->address }}</li>
    <li>{{ $subscriber->start }}</li>
    <li>{{ $subscriber->duration }}</li>
    <li>{{ $subscriber->publication_code }}</li>
    <li>{{ $subscriber->count }}</li>
</ul>

<form action="/tasks/books/subscribers/{{ $subscriber->id }}/edit">
    @csrf
    <button class="button is-info is-rounded" type="submit">Edit</button>
</form>

@endsection
