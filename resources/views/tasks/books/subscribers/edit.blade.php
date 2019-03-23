@extends('layouts/main')

@section('title', 'Books task')

@section('heading', 'Subscriber')

@section('content')

<form action="/tasks/books/subscribers" method="POST">
    @method('PATCH')
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

    <h2 class="subtitle has-text-centered">Update a Subscriber</h2>

    <!--TODO: Register form for subscribers -->
    <!--TODO: Shift to 2 comun layout insode the form -->
    <div class="level field">
        <div class="level-item">
            <label class="label" for="name">Name</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('name') ? 'is-danger' : '' }}" placeholder="Full name" value="{{ $subscriber->name }}" name="name" id="sub-name" required>
        </div>
    </div>

    <div class="level field">
        <div class="level-item">
            <label class="label" for="address">Address</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('address') ? 'is-danger' : '' }}" placeholder="Address" value="{{ old('address') }}" name="address" id="sub-address" required>
        </div>
    </div>

     <!--TODO: Change to dropdown 1-12 -->
    {{-- <div class="level field">
        <div class="level-item">
            <label class="label" for="start">Start</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('start') ? 'is-danger' : '' }}" placeholder="Starting month" value="{{ old('start') }}" name="start" id="sub-month" required>
        </div>
    </div> --}}

    <div class="field level">
        <div class="level-item">
            <label class="label" for="start">Start</label>
        </div>
        <div class="control">
            <div class="select" >
            <select name="start">
                <option value="-">-</option>
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            </div>
        </div>
    </div>

    <div class="level field">
        <div class="level-item">
            <label class="label" for="duration">Duration</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('duration') ? 'is-danger' : '' }}" placeholder="Subscribtion Duration" value="{{ old('duration') }}" name="duration" id="sub-duration" required>
        </div>
    </div>

    <!--TODO: Change to dropdown with all existing codes -->
    <div class="level field">
        <div class="level-item">
            <label class="label" for="code">Code</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('code') ? 'is-danger' : '' }}" placeholder="Publication code" value="{{ old('publication_code') }}" name="publication_code" id="sub-code" required>
        </div>
    </div>

    <div class="level field">
        <div class="level-item">
            <label class="label" for="count">Count</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('count') ? 'is-danger' : '' }}" placeholder="Publications count" value="{{ old('count') }}" name="count" id="sub-count" required>
        </div>
    </div>

    <div class="level field">
        <div class="level-item"></div>
        <div class="control level-item">
            <button type="submit" class="button is-link is-rounded">Update</button>
        </div>
    </div>

</form>

@endsection
