<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>確認画面</title>
</head>

<body>
    <h1>入力確認</h1>
    <p>
        内容はお間違いないですか？
    </p>
    <form method="post" action="{{ route('complete') }}">
        @csrf
        <label>メールアドレス</label>
        {{ $inputs['email'] }}
        <input name="email" value="{{ $inputs['email'] }}" type="hidden">

        <label>問い合わせ内容</label>
        {{ $inputs['body'] }}
        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
        <input type="submit" value="登録">
    </form>
</body>

</html>
