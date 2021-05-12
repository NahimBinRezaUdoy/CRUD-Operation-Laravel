@extends('layout.app')

@section('content')

    <h1 class="mt-5">Create New Student</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        @include('layout.form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
