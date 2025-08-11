@extends('admin')

@section('content')
<h1>Course Details</h1>

<div class="card">
    <div class="card-header">
        <h3>{{ $course->name }}</h3>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-2"><strong>ID:</strong></div>
            <div class="col-md-10">{{ $course->id }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Name:</strong></div>
            <div class="col-md-10">{{ $course->name }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Description:</strong></div>
            <div class="col-md-10">{{ $course->description }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Created:</strong></div>
            <div class="col-md-10">{{ $course->created_at->format('M d, Y \a\t g:i A') }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2"><strong>Updated:</strong></div>
            <div class="col-md-10">{{ $course->updated_at->format('M d, Y \a\t g:i A') }}</div>
        </div>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
    <form action="{{ route('courses.destroy', $course->id) }}" method="post" class="d-inline">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger" name="submit" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
    </form>
</div>
@endsection