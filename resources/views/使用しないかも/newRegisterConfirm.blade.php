<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規ユーザー登録</title>
</head>

<body>
    <h1>入力内容確認</h1>
    <form method="post" action="{{ route('registerComp') }}">
        @csrf
        <label>メールアドレス</label><br>
        {{ $registers['email'] }}<br>
        <input name="email" value="{{ $registers['email'] }}" type="hidden"><br>

        <label>問い合わせ内容</label><br>
        {{ $registers['password'] }}<br>
        <input name="password" value="{{ $registers['password'] }}" type="hidden"><br>
        <input type="submit" value="登録">
    </form>
</body>

</html>