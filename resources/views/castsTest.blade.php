<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action={{ route('casts.create') }} method="POST">
        @csrf
        <h1>Casts</h1>
        <input type="text" name="write">
        <button type="submit">추가</button>
    </form>
</body>
</html>