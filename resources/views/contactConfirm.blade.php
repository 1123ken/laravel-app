<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
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