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

    <div>
        <form method="post" action="{{ route('contactComplete') }}">
            @csrf
            <label>メールアドレス</label><br>
            {{ $contacts['email'] }}<br>
            <input name="email" value="{{ $contacts['email'] }}" type="hidden"><br>
            
            <label>問い合わせ内容</label><br>
            {{ $contacts['body'] }}<br>
            <input name="body" value="{{ $contacts['body'] }}" type="hidden"><br>
            <input type="submit" value="登録">
        </form>
    </div>
</body>

</html>
