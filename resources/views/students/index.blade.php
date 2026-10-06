<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Students List</title>
</head>
<body>
    <div class="container" mx-auto>
        <h1>Students List</h1>
        <a class="bg-amber-200" href="{{ route('students.create') }}">Create Student</a>
        <div class="grid grid-cols-4 gap-2">
            @foreach ($students as $student)
                <div class="bg-blue-100">
                    <h2>{{$student->fullname}}</h2>
                    <p>{{$student->date_of_birth}}</p>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="bg-red-300" type="submit" value="Delete">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>