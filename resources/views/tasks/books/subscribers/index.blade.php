@extends('layouts/columns-books')

@section('title', 'Subscribers admin')
@section('heading', 'Books Task')
@section('back-link', '/tasks/books')
@section('back-text')

    <b>UP</b>

@endsection

@section('column1')

<h2 class="subtitle has-text-centered">Table to see all the subscribers</h2>

<table class="table is-striped is-fullwidth">
    <thead>
        <th>Name</th>
        <th>Address</th>
        <th>Start</th>
        <th>Duration</th>
        <th>Code</th>
        <th>Count</th>
        <th colspan="2"></th>
    </thead>
    <tbody>
        @foreach ($subs as $subscriber)
            <tr>
                <td>{{ $subscriber->name }}</td>
                <td>{{ $subscriber->address }}</td>
                <td>{{ $subscriber->start }}</td>
                <td>{{ $subscriber->duration }}</td>
                <td>{{ $subscriber->publication_code }}</td>
                <td>{{ $subscriber->count }}</td>

                <td>
                    <form action="/tasks/books/subscribers/{{ $subscriber->id }}/">
                        <button class="button is-info is-rounded" type="submit">View</button>
                    </form>
                </td>

                <td>
                    <form method="POST" action="/tasks/books/subscribers/{{ $subscriber->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="button is-danger is-rounded" type="submit"
                        onclick="return confirmDelete('{{$subscriber->code}}')">Delete</button>
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

    <div class="box">

        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input type="text"
                    class="input is-rounded {{ $errors->has('name') ? 'is-danger' : '' }}"
                    placeholder="Full name" value="{{ old('name') }}"
                    name="name" id="sub-name" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="address">Address</label>
            <div class="control">
                <input type="text"
                    class="input is-rounded {{ $errors->has('address') ? 'is-danger' : '' }}"
                    placeholder="Address" value="{{ old('address') }}"
                    name="address" id="sub-address" required>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label" for="start">Starting month</label>
                    <div class="control">
                        <div class="select" >
                            <select name="start" required>
                                <option value="">-</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label" for="publication_code">Publication Code</label>
                    <div class="control">
                        <div class="select">
                            <select name="publication_code" required>
                                <option value="">-</option>
                                @foreach ($pubs as $publication)
                                    <option value="{{ $publication->code }}">{{ $publication->code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label" for="duration">Duration</label>
                    <div class="control">
                        <div class="select" >
                            <select name="duration" required>
                                <option value="">-</option>
                                <option value="1">1 month</option>
                                <option value="3">3 months</option>
                                <option value="6">6 months</option>
                                <option value="12">12 months</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label" for="count">Count</label>
                    <div class="control">
                        <input type="text"
                            class="input is-rounded {{ $errors->has('count') ? 'is-danger' : '' }}"
                            placeholder="Count" value="{{ old('count') }}"
                            name="count" id="sub-count" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="has-text-centered">
            <button type="submit" class="button is-link is-rounded">Register subscriber</button>
        </div>

    </div>

</form>

@endsection
