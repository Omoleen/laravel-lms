@extends('admin')

@section('content')
<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label for="fname">First Name</label>
    <input type="text" name="fname" placeholder="First Name" class="form-control" value="{{ $student->fname }}">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" placeholder="Last Name" class="form-control" value="{{ $student->lname }}">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" class="form-control" value="{{ $student->email }}">
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
@endsection