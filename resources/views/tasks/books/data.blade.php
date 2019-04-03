@extends('layouts/columns-books')

@section('title', 'Data tables')
@section('heading', 'Books Task')
@section('back-link', '/tasks/books')
@section('back-text')

    <b>UP</b>

@endsection

@section('column1')

<p class="subtitle has-text-centered is-4">Less than average profits</p>
<P> Total profits: {{ $sum }}</P>

@endsection

@section('column2')

<p class="subtitle has-text-centered is-4">Maximum monthly profits</p>


@endsection
