@extends('layout.app')

@section('content')

    <h1 class="mt-5">Create New Student</h1>
    <form action="#" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
