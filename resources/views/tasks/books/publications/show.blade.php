@extends('layouts/books')

@section('title')

    {{ $publication->name }}

@endsection

@section('heading', 'Publication')
@section('back-link', '/tasks/books/publications')
@section('back-text')

    <b>UP</b>

@endsection

@section('content')

<table class="table is-bordered">
    <tr>
        <th>Name</th>
        <td>{{ $publication->name }}</td>
    </tr>
    <tr>
        <th>ID Code</th>
        <td>{{ $publication->code }}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{ $publication->getPrice() }}</td>
    </tr>
</table>

<div class="buttons">

    <a class="button is-info" href="/tasks/books/publications/{{ $publication->id }}/edit">Edit</a>

    {{-- /tasks/books/publications/{{ $publication->id }} --}}
    <form method="POST" action="">
        @csrf
        @method('DELETE')
        <button class="button is-danger" id="btn_delete" type="submot" onclick="return confirmDelete('{{$publication->code}}')">Delete</button>
    </form>

</div>

<script>
function confirmDelete(code) {

    if(!confirm('Are you sure?')) {
        event.preventDefault();
    }

    // swal({
    //     title: "Are you sure?",
    //     text: code + " will be deleted",
    //     icon: "error",
    //     buttons: true,
    //     dangerMode: true,
    // }).then((willDelete) => {
    //     if(willDelete)
    //     {
    //         event.preventDefault();
    //         document.getElementById("btn_delete").type = "submit";
    //     }
    // });
}
</script>

@endsection
