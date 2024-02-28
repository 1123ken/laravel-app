<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログインフォーム</title>
</head>
<body>
    <h1>管理者ログインページ</h1>
    <div>
        {{-- <form action="post" method="{{ route('admin') }}"> --}}
            <form action="#">
            <p>
                <label for="loginID">ログインID</label><br>
                <input type="text" name="loginID">
            </p>
            <p>
                <label for="loginPass">ログインパスワード</label><br>
                <input type="password" name="loginPass">
            </p>
            <div>
                {{-- ルート設定がうまくいかないのでいったんストップ --}}
                {{-- <button location.href="{{ route('newRegister') }}">新規登録</button> --}}
                {{-- <input type="submit" value="ログイン"> --}}
            </div>
        </form>
    </div>
    <button onclick='location.href="/newRegister"'>新規登録</button>
    ログイン機能は未実装なのでそのままログインできる
    <button onclick='location.href="/admin"'>ログイン</button>
</body>

</html>
