<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規ユーザー登録</title>
</head>

<body>
    <div>
        <form action="{{ route('newRegisterConfirm') }}">
            @csrf
            <h1>新規登録画面</h1>
            <p>
                <label for="registerID">ユーザーID(メールアドレス)</label><br>
                <input type="email" name="registerID" placeholder="xxxx@xxx.com">
            </p>
            <p>
                <label for="registerPass">パスワード</label><br>
                <input type="password" name="registerPass">
            </p>
            <input type="submit" value="登録">
            <button onclick="location.href='/login'">戻る</button>
        </form>
    </div>
</body>
</html>
