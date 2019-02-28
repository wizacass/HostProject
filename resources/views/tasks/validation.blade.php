@extends('layouts/main')

@section('title', 'Validation task')

@section('heading', 'Participants registration')

@section('content')

    <div class="columns">
        <div class="column box">
            <form method="POST" action="">
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

            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="First Name" value="{{ old('name') }}" required>
                </div>
            </div>
            <br/>
             <div class="field">
                <label class="label" for="surname">Surname</label>
                <div class="control">
                    <input type="text" class="input {{ $errors->has('surname') ? 'is-danger' : '' }}" name="surname" placeholder="Last Name" value="{{ old('surname') }}" required>
                </div>
            </div>
            <br/>
             <div class="field">
                <label class="label" for="school">School</label>
                <div class="control">
                    <input type="text" class="input {{ $errors->has('school') ? 'is-danger' : '' }}" name="school" placeholder="School" value="{{ old('school') }}" required>
                </div>
            </div>
            <br/>
            <div class="field">
                <label class="label" for="age">Age</label>
                <div class="control">
                    <select class="select" name="age">
                        <option value="-">-</option>
                        @for ($i = 14; $i <= 25; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <br/>
            <div class="field">
                <label class="label" for="language">Programming language</label>
                    @for ($i = 1; $i <= count($languages); $i++)
                        <label class="checkbox"><input type="checkbox" name="language[{{$i}}]"> {{$languages[$i-1]}}</label>
                    @endfor
            </div>
            <br/><br/>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Register</button>
                </div>
            </div>

            </form>
        </div>

        <div class="column">
            <form method="POST" action="">
                @csrf
                @method('DELETE')

                <button class="button is-danger is-pulled-right">Clear all data</button>
                <p class="title is-4 is-pulled left" style="text-align: center">Existing participants</p>
            </br>
            </form>
            @if (count($participants) > 0)
            <table class="table" style="width: 100%">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>School</th>
                        <th>Age</th>
                        <th>Languages</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($participants); $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $participants[$i]->name }}</td>
                            <td>{{ $participants[$i]->surname }}</td>
                            <td>{{ $participants[$i]->school }}</td>
                            <td>{{ $participants[$i]->age }}</td>
                            <td>{{ $participants[$i]->language }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            @else
                <p style="text-align: center">There are no participants yet!</p>
            @endif
        </div>
    </div>

@endsection
