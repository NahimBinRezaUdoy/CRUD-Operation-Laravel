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
                            <button class="btn btn-success btn-sm m-1">
                                Show
                            </button>
                        </a>

                        <a href="{{ route('student.edit', $student) }}">
                            <button class="btn btn-primary btn-sm m-1">
                                Edit
                            </button>
                        </a>

                        <form action="{{ route('student.destroy', $student) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm m-1" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>There is no student</p>
            @endforelse
        </tbody>
    </table>
@endsection
