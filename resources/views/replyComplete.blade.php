<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>返信完了</title>
</head>

<body>
    <div>
        <h1>返信完了しました</h1>
        <form method="post" action="{{ route('admin') }}">
            @csrf
            <input type="submit" value="戻る" id="inputBtn">
        </form>
    </div>

</body>

</html>
