@extends('layouts/columns')

@section('heading', 'Basic Tasks List')

@section('column1')

<form action="/tasks/list" method="POST">
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
</form>

@endsection

@section('column2')
    <ul>
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
    </ul>
@endsection
