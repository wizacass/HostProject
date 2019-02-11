@extends('layout')

@section('title', 'Validation task')

@section('heading', 'Participants registration')

@section('content')

    <div class="columns">
        <div class="column box">
            <form method="POST" action="">
            @csrf

            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input type="text" class="input" name="name" placeholder="First Name" required>
                </div>
            </div>
            <br/>
             <div class="field">
                <label class="label" for="surname">Surname</label>
                <div class="control">
                    <input type="text" class="input" name="surname" placeholder="Last Name" required>
                </div>
            </div>
            <br/>
             <div class="field">
                <label class="label" for="school">Shool</label>
                <div class="control">
                    <input type="text" class="input" name="school" placeholder="School" required>
                </div>
            </div>
            <br/>
            <div class="field">
                <label class="label" for="age">Age</label>
                <div class="control">
                    <select class="select">
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
                    <label class="checkbox"><input type="checkbox"> C#</label>
                    <label class="checkbox"><input type="checkbox"> C++</label>
                    <label class="checkbox"><input type="checkbox"> Pascal</label>
                    <label class="checkbox"><input type="checkbox"> COBOL</label>
                    <label class="checkbox"><input type="checkbox"> Fortran</label>
                    <label class="checkbox"><input type="checkbox"> Assembler</label>
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
            <p class="title is-4" style="text-align: center">Existing participants</p>
        </div>
    </div>

@endsection
