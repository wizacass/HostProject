@extends('layouts/books')

@section('title'))

    {{ $subscriber->name }}

@endsection

@section('heading', 'Subscriber')
@section('back-link', '/tasks/books/subscribers')
@section('back-text')

    <b>UP</b>

@endsection

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
    <button class="button is-info is-rounded" type="submit">Edit</button>
</form>

@endsection
