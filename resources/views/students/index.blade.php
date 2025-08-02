@extends('admin')

@section('content')
<h1>Students</h1>

<a href="{{ route('students.create') }}" class="btn btn-primary">Create Student</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->fname }}</td>
                <td>{{ $student->lname }}</td>
                <td>{{ $student->email }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection