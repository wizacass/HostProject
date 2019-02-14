@extends('layout')

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
                <label class="label" for="school">Shool</label>
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
                    {{-- <label class="checkbox"><input type="checkbox" name="language[6]"> C#</label>
                    <label class="checkbox"><input type="checkbox" name="language[1]"> C++</label>
                    <label class="checkbox"><input type="checkbox" name="language[2]"> Pascal</label>
                    <label class="checkbox"><input type="checkbox" name="language[3]"> COBOL</label>
                    <label class="checkbox"><input type="checkbox" name="language[4]"> Fortran</label>
                    <label class="checkbox"><input type="checkbox" name="language[5]"> Assembler</label> --}}
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
            @if ($participants)
            <table class="table" style="width: 100%">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>School</th>
                        <th>Age</th>
                        <th>Languages</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($participants as $p)
                        <tr>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->surname }}</td>
                            <td>{{ $p->school }}</td>
                            <td>{{ $p->age }}</td>
                            <td>{{ $p->language }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p style="text-align: center">There are no participants yet!</p>
            @endif
        </div>
    </div>

@endsection
