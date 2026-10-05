<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Students List</title>
</head>
<body>
    <div class="container">
        <h1>Students List</h1>
        <div class="grid grid-cols-2 gap-2">
            @foreach ($students as $student)
                <div>
                    <h2>{{$student->fullname}}</h2>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>