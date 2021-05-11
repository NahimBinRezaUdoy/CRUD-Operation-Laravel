@extends('layout.app')

@section('content')
    <h1 class="mt-5">Students</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->image }}</td>
                    <td>
                        <a href="/students/create">
                            <button class="btn btn-success btn-sm">
                                Create
                            </button>
                        </a>
                        <a href="/students/create">
                            <button class="btn btn-primary btn-sm">
                                Edit
                            </button>
                        </a>
                        <a href="/students/create">
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @empty
                <p>There is no student</p>
            @endforelse
        </tbody>
    </table>
@endsection
