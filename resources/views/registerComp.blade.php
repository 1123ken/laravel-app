2
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせフォーム</title>
</head>

<body>
    <div>
        <form action="{{ route('login') }}">
            <h1>登録完了しました</h1>
            <input type="submit" value="ログイン画面へ">
        </form>
    </div>
</body>

</html>
