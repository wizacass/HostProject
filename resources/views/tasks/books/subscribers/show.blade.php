@extends('layouts/main')

@section('title', '{{ $subscriber->name }}')

@section('content')

<ul>
    <li>{{ $subscriber->name }}</li>
    <li>{{ $subscriber->address }}</li>
    <li>{{ $subscriber->start }}</li>
    <li>{{ $subscriber->duration }}</li>
    <li>{{ $subscriber->publication_code }}</li>
    <li>{{ $subscriber->count }}</li>
</ul>

@endsection
