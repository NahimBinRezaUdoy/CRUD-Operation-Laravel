@extends('layout.app')

@section('content')
    <div class="jumbotron mx-auto" style="width: 700px; margin-top:50px">
        <h1 class=" display-4">{{ $student->name }} Details</h1>
        <div class="row">
            <div class="col-6">
                <img src="/storage/{{ $student->image }}" alt="" style="width: 250px ; height:250px">
            </div>
            <div class="col-6">
                <p class="lead">{{ $student->email }}</p>
                <hr class="my-4">
                <p>Created {{ $student->created_at->diffForHumans() }}</p>
                <p class="lead">
                    <a class="btn btn-primary" href="{{ route('student.index') }}" role="button">Back</a>
                    <a class="btn btn-success" href="{{ route('student.edit', $student) }}" role="button">Edit</a>
                    <a class="btn btn-danger" href="#" role="button">Delete</a>
                </p>
            </div>
        </div>



    </div>
@endsection
