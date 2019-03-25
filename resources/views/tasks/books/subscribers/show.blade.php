@extends('layouts/books')

@section('title')

    {{ $subscriber->name }}

@endsection

@section('heading', 'Subscriber')
@section('back-link', '/tasks/books/subscribers')
@section('back-text')

    <b>UP</b>

@endsection

@section('content')

<table class="table is-bordered">
    <tr>
        <th>Name</th>
        <td>{{ $subscriber->name }}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{ $subscriber->address }}</td>
    </tr>
    <tr>
        <th>Start</th>
        <td>{{ $subscriber->start }}</td>
    </tr>
    <tr>
        <th>Duration</th>
        <td>{{ $subscriber->duration }}</td>
    </tr>
    <tr>
        <th>Publication code</th>
        <td>{{ $subscriber->publication_code }}</td>
    </tr>
    <tr>
        <th>Count</th>
        <td>{{ $subscriber->count }}</td>
    </tr>
</table>

<div class="buttons">

    <a class="button is-info" href="/tasks/books/subscribers/{{ $subscriber->id }}/edit">Edit</a>

    <form method="POST" action="">
        @csrf
        @method('DELETE')
        <button class="button is-danger" type="submit"
        onclick="return confirmDelete('{{$subscriber->name}}')">Delete</button>
    </form>

</div>

@endsection
