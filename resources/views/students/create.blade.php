@extends('admin')

@section('content')
<h1>Create Student</h1>
<form action="{{ route('students.store') }}" method="post">
    {{ csrf_field() }}
    <label for="fname">First Name</label>
    <input type="text" name="fname" placeholder="First Name" class="form-control">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" placeholder="Last Name" class="form-control">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" class="form-control">
    <button type="submit" class="btn btn-primary" name="submit">Create</button>
</form>
@endsection