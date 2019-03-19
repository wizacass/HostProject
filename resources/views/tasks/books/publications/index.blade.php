@extends('layouts/columns')

@section('heading', 'Books Task')

@section('column1')

<h2 class="subtitle has-text-centered">Table to see all the publications</h2>

 {{-- <ul>
        @foreach ($tasks as $task)
            <li>
                <div class="box level">
                    <p class="level-left">{{ $task->name }}</p>
                    <br/>
                    <form method="POST" action="/tasks/list/{{ $task->id }}">
                        @method('DELETE')
                        @csrf
                        <button class="button is-danger level-right" type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul> --}}

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
            <input type="text" class="input is-rounded {{ $errors->has('name') ? 'is-danger' : '' }}" placeholder="Book Title" value="{{ old('name') }}" name="name" id="pub-name" required>
        </div>
    </div>

     <div class="level field">
        <div class="level-item">
            <label class="label" for="code">Code</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('code') ? 'is-danger' : '' }}" placeholder="Book Code" value="{{ old('code') }}" name="code" id="pub-code" required>
        </div>
    </div>

     <div class="level field">
        <div class="level-item">
            <label class="label" for="price">Price</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('price') ? 'is-danger' : '' }}" placeholder="Book price (decimal value)" value="{{ old('price') }}" name="price" id="pub-price">
        </div>
    </div>

    <div class="level field">
        <div class="level-item"></div>
        <div class="control level-item">
            <button type="submit" class="button is-link is-rounded">Register publication</button>
        </div>
    </div>

</form>

{{-- <form action="/tasks/list" method="POST">
    @csrf

    <div class="field">
        <label class="label" for="task">Task</label>
        <input type="text" class="input" name="name" id="task-name" required>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Add task</button>
        </div>
    </div>
</form> --}}

@endsection
