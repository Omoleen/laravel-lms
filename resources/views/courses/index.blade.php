@extends('admin')

@section('content')
<h1>Courses</h1>

<a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ Str::limit($course->description, 100) }}</td>
                <td>{{ $course->created_at->format('M d, Y') }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="post">
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