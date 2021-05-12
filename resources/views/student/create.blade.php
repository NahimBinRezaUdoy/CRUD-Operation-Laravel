@extends('layout.app')

@section('content')

    <h1 class="mt-5">Create New Student</h1>
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('layout.form')

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
