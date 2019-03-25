@extends('layouts/columns-books')

@section('title', 'Publications admin')
@section('heading', 'Books Task')
@section('back-link', '/tasks/books')
@section('back-text')

    <b>UP</b>

@endsection

@section('column1')

<h2 class="subtitle has-text-centered">Table to see all the publications</h2>

<table class="table is-striped is-fullwidth">
    <thead>
        <th>Name</th>
        <th>Code</th>
        <th>Price</th>
        <th colspan="2"></th>
    </thead>
    <tbody>
        @foreach ($pubs as $publication)
            <tr>
                <td>{{ $publication->name }}</td>
                <td>{{ $publication->code }}</td>
                <td>{{ $publication->getPrice() }}</td>
                <td>
                    <form action="/tasks/books/publications/{{ $publication->id }}/">
                        <button class="button is-info is-rounded" type="submit">View</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="/tasks/books/publications/{{ $publication->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="button is-danger is-rounded" type="submit"
                        onclick="return confirmDelete('{{$publication->code}}')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

@endsection

@section('column2')

<form action="/tasks/books/publications" method="POST">
    @csrf

    @if ($errors->any())
    <article class="message is-danger">
        <div class="message-header"><p>Danger</p></div>
        <div class="message-body">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    </article>
    @endif

    <h2 class="subtitle has-text-centered">Register new publication</h2>

    <div class="level field">
        <div class="level-item">
            <label class="label" for="name">Name</label>
        </div>
        <div class="level-item">
            <input type="text"
                class="input is-rounded {{ $errors->has('name') ? 'is-danger' : '' }}"
                placeholder="Book Title" value="{{ old('name') }}"
                name="name" id="pub-name" required>
        </div>
    </div>

     <div class="level field">
        <div class="level-item">
            <label class="label" for="code">Code</label>
        </div>
        <div class="level-item">
            <input type="text"
                class="input is-rounded {{ $errors->has('code') ? 'is-danger' : '' }}"
                placeholder="Book Code" value="{{ old('code') }}"
                name="code" id="pub-code" required>
        </div>
    </div>

     <div class="level field">
        <div class="level-item">
            <label class="label" for="price">Price</label>
        </div>
        <div class="level-item">
            <input type="text"
                class="input is-rounded {{ $errors->has('price') ? 'is-danger' : '' }}"
                placeholder="Book price (decimal value)" value="{{ old('price') }}"
                name="price" id="pub-price">
        </div>
    </div>

    <div class="level field">
        <div class="level-item"></div>
        <div class="control level-item">
            <button type="submit" class="button is-link is-rounded">Register publication</button>
        </div>
    </div>

</form>

@endsection
