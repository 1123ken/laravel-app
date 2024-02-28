<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>確認画面</title>
</head>

<body>
    <h1>入力内容確認</h1>
    <form method="post" action="{{ route('complete') }}">
        @csrf
        <label>メールアドレス</label><br>
        {{ $inputs['email'] }}br
        <input name="email" value="{{ $inputs['email'] }}" type="hidden"><br>

        <label>問い合わせ内容</label><br>
        {{ $inputs['body'] }}br
        <input name="body" value="{{ $inputs['body'] }}" type="hidden"><br>
        <input type="submit" value="登録">
    </form>
</body>

</html>
