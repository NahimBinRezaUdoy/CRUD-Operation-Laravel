@extends('layout.app')

@section('content')

    <h1 class="mt-5">Create New Student</h1>
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Nanme">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Enter email">
            @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control" id="image">
            @error('image')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
