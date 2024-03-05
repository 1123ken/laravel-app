<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div>
        <h1>新規登録画面</h1>
        <div>
            <form action="/register" method="post">
                @csrf
                <div>
                    <label for="registerID">ユーザーID(メールアドレス)</label><br>
                    <input type="email" name="registerID" value="{{ old('email') }}" placeholder="xxxx@xxx.com">
                </div>
                <div>
                    <label for="password">パスワード</label><br>
                    <input type="password" name="password" value="{{ old('password') }}">
                </div>
                <div>
                    <label for="password_confirmation">パスワード確認</label><br>
                    <input type="password_confirmation" name="password_confirmation"
                    value="{{ old('password_confirmation') }}">
                </div>
                <div>
                    <input type="submit" value="登録">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
