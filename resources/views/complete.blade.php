<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>完了画面</title>
</head>

<body>
    <h1>送信しました</h1>
    <div>
        <form method="post" action="{{ route('index') }}">
            @csrf
            <input type="submit" value="戻る">
        </form>
    </div>
</body>
</html>
