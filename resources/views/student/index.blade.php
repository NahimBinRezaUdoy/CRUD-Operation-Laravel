@extends('layout.app')

@section('content')

    <h1 class="mt-5">Students</h1>
    <a href="/students/create">
        <button class="btn btn-success btn-sm">
            Create New Student
        </button>
    </a>


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
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <img src="/storage/{{ $student->image }}" alt="" style="width:80px; height:80px">
                    </td>
                    <td>
                        <a href="{{ route('student.show', $student) }}">
                            <button class="btn btn-success btn-sm">
                                Show
                            </button>
                        </a>
                        <a href="">
                            <button class="btn btn-primary btn-sm">
                                Edit
                            </button>
                        </a>
                        <a href="">
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
