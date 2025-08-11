@extends('admin')

@section('content')
<h1>Create Student</h1>
<form action="{{ route('students.store') }}" method="post">
    {{ csrf_field() }}
    <div class="row mb-3">
        <div class="col">
            <label for="fname">First Name <span class="text-danger">*</span></label>
            <input type="text" name="fname" placeholder="First Name" class="form-control" value="{{ old('fname') }}">
            @error('fname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="lname">Last Name <span class="text-danger">*</span></label>
            <input type="text" name="lname" placeholder="Last Name" class="form-control" value="{{ old('lname') }}">
            @error('lname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
@endsection