<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Students Create</title>
</head>
<body>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input name="fullname" type="text" placeholder="ФИО" required><br>
        <input name="date_of_birth" type="date" placeholder="Дата рождения"><br>
        <input type="submit" value="Создать">
    </form>
</body>
</html>