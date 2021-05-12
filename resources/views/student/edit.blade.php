@extends('layout.app')

@section('content')

    <h1 class="mt-5">Create New Student</h1>
    <form action="{{ route('student.update', $student) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        @include('layout.form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
