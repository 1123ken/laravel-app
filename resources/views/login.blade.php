<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログインフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>管理者ログインページ</h1>
    <div>
        <form action="post" method="{{ route('admin') }}">
            @csrf
            <p>
                <label for="loginID">ログインID</label><br>
                <input type="email" name="loginID">
            </p>
            <p>
                <label for="loginPass">ログインパスワード</label><br>
                <input type="password" name="loginPass">
            </p>
            <div>
                <input type="submit" value="ログイン">
            </div>
        </form>
    </div>
    <div>
        <button onclick='location.href="/newRegister"'>新規登録</button>
        <button onclick='location.href="/admin"'>ログイン</button>
        <button onclick='location.href="/index"'>戻る</button>
    </div>
</body>

</html>
