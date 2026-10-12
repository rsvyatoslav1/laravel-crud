<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $student->fullname }}</title>
</head>

<body>
    <div class="container" mx-auto>
        <h1>{{ $student->fullname }}</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('put')
            <input name="fullname" type="text" placeholder="ФИО" value="{{ $student->firstname }}" required><br>
            <input name="date_of_birth" type="date" placeholder="Дата рождения" value="{{ $student->date_of_birth }}"><br>
            <input type="submit" value="Обновить">
        </form>
    </div>
</body>

</html>