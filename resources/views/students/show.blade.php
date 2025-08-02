@extends('admin')

@section('content')
<h1>Student</h1>
<p>{{ $student->id }}</p>
<p>{{ $student->fname }}</p>
<p>{{ $student->lname }}</p>
<p>{{ $student->email }}</p>
<p>{{ $student->phone }}</p>
<p>{{ $student->address }}</p>
<p>{{ $student->city }}</p>
<p>{{ $student->state }}</p>
<p>{{ $student->zip }}</p>
<p>{{ $student->country }}</p>

<a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
 <form action="{{ route('students.destroy', $student->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger" name="submit">Delete</button>
 </form>
@endsection