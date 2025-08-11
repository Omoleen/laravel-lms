@extends('admin')

@section('content')
<h1>Create Course</h1>
<form action="{{ route('courses.store') }}" method="post">
    {{ csrf_field() }}
    <div class="row mb-3">
        <div class="col">
            <label for="name">Course Name <span class="text-danger">*</span></label>
            <input type="text" name="name" placeholder="Course Name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="description">Description <span class="text-danger">*</span></label>
            <textarea name="description" placeholder="Course Description" class="form-control" rows="4">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
@endsection