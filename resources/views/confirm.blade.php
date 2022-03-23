<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action='/confirmAuth/{{ $user->email }}' method="POST">
        @method('PUT')
        @csrf
        confirm
        {{ $user->email }}
        <button type="submit">인증</button>
        @if ($user->status == 1)
            <h2>인증 완료</h2>
            @elseif ($user->status == 2)
            <h2>인증 확인 필요</h2>
        @endif
    </form>
</body>
</html>