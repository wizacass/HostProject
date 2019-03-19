@extends('layouts/columns')

@section('heading', 'Books Task')

@section('column1')

<p>Table to see all the publications</p>

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

<h2 class="subtitle has-text-centered">Form to create new publication</h2>

<form>
    @csrf

    <div class="level field">
        <div class="level-item">
            <label class="label" for="name">Name</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded" name="name" id="pub-name" required>
        </div>
    </div>

     <div class="level field">
        <div class="level-item">
            <label class="label" for="code">Code</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded" name="code" id="pub-code" required>
        </div>
    </div>

     <div class="level field">
        <div class="level-item">
            <label class="label" for="price">Price</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded" name="price" id="pub-price" required>
        </div>
    </div>

    <div class="field">
        <div class="control has-text-centered">
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
