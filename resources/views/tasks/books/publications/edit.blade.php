@extends('layouts/books')

@section('title')

    {{ $publication->name }}

@endsection

@section('heading', 'Publication')
@section('back-link', '/tasks/books/publications/{{$publication->id}}')
@section('back-text')

    <b>UP</b>

@endsection

@section('content')

    <h1>Form to edit publication</h1>

@endsection
