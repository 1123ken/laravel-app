<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>確認画面</title>
</head>

<body>
    入力内容

    内容はお間違いないですか？
    <form method="post" action="{{ route('complete') }}">
        @csrf
        <input type="submit" name="登録">
    </form>
</body>

</html>
