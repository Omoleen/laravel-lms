<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('students.index') }}">Students</a>
            </li>
            <li>
                <a href="{{ route('courses.index') }}">Courses</a>
            </li>
        </ul>
    </div>
    @yield('content')
</body>
</html>