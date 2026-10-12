<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $student->fullname }}</title> <!-- {{ $students->fullName() }} -->
</head>

<body>
    <div class="container" mx-auto>
        <h1>{{ $student->fullname }}</h1> <!-- {{ $students->fullName() }} -->
        <p>{{ $student->date_of_birth }}</p>
    </div>
</body>

</html>