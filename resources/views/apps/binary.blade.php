@extends('layouts/columns')

@section('title', 'Binary converter')

@section('heading', 'Binary converter')

@section('column1')

    <p>I convert from decimal to binary using Vue.js!</p>

    <div id="binary">
        {{-- <p>{{ binary.message }}</p> --}}
    </div>

    <script src='/js/app.js'></script>

@endsection

@section('column2')

    <p>I convert from binary to decimal using Vue.js!</p>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@endsection
