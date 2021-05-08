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
                    <td>Udoy</td>
                    <td>Udoy@gmail.com</td>
                    <td>image</td>
                    <td>
                        <button>
                            <a href="/students/create">Add New Student</a>
                        </button>
                    </td>
                </tr>
            @empty
                <p>There is no student</p>
            @endforelse
        </tbody>
    </table>
@endsection
