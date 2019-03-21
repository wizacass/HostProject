@extends('layouts/columns')

@section('heading', 'Books Task')

@section('column1')

<h2 class="subtitle has-text-centered">Table to see all the subscribers</h2>

<table class="table is-striped is-fullwidth">
    <thead>
        <!--TODO: Header for subscribers -->
        <th>Name</th>
        <th colspan="2"></th>
    </thead>
    <tbody>
        @foreach ($subs as $subscriber)
            <tr>
                <!--TODO: Data for subscribers -->
                <td>{{ $subscriber->name }}</td>
                <td>
                    <form method="POST" action="/tasks/books/subscribers/{{ $subscriber->id }}">
                        @csrf
                        <button class="button is-info is-rounded" type="submit">View</button>
                    </form>
                </td>

                <td>
                    <form method="POST" action="/tasks/books/subscribers/{{ $subscriber->id }}">
                        @csrf
                        <button class="button is-info is-rounded" type="submit">View</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="/tasks/books/subscribers/{{ $subscriber->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="button is-danger is-rounded" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

@endsection

@section('column2')

<form action="/tasks/books/subscribers" method="POST">
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

    <h2 class="subtitle has-text-centered">Register new Subscriber</h2>

    <!--TODO: Register form for subscribers -->
    <div class="level field">
        <div class="level-item">
            <label class="label" for="name">Name</label>
        </div>
        <div class="level-item">
            <input type="text" class="input is-rounded {{ $errors->has('name') ? 'is-danger' : '' }}" placeholder="Book Title" value="{{ old('name') }}" name="name" id="pub-name" required>
        </div>
    </div>

    <div class="level field">
        <div class="level-item"></div>
        <div class="control level-item">
            <button type="submit" class="button is-link is-rounded">Register subscriber</button>
        </div>
    </div>

</form>

@endsection
