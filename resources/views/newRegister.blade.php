2
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規ユーザー登録</title>
</head>

<body>
    <div>
        <form action="{{ route('registerComp') }}">
            <h1>新規登録画面</h1>
            <p>
                <label for="registerID">ユーザーID</label>
                <input type="text" name="registerID">
            </p>
            <p>
                <label for="registerPass">パスワード</label>
                <input type="password" name="registerPass">
            </p>
            <input type="submit" value="登録">
        </form>
    </div>
</body>

</html>
