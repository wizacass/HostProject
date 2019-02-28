@extends('layouts/columns')

@section('heading', 'Basic Tasks List')

@section('column1')

<form action="/task/list" method="POST">
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
    <p>Column2</p>
@endsection
