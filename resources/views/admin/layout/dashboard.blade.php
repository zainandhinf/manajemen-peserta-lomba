@extends('admin.main')

@section('content')
    <h1>Hallo ini dashboard</h1>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
