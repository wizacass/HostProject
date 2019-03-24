@extends('layouts/books')

@section('content')

    <div class="columns">
        <div class="column">
            @yield('column1')
        </div>
        <div class="column">
            @yield('column2')
        </div>
    </div>

    @yield('scripts')

@endsection
