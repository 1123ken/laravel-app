<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>問い合わせ返信フォーム</title>
</head>

<body>
    <p>問い合わせメールアドレス</p>
    <form method="post" action="{{ route('replyComplete') }}">
        <div>
            {{ $replydata['email'] }}
            <input type="hidden"  name="email" value="{{ $replydata['email'] }}">
        </div>
        <p>問い合わせ内容</p>
        <div>
            {{ $replydata['body'] }}
            <input type="hidden" name="body" value="{{ $replydata['body'] }}">
        </div>

        <h1>返信内容</h1>
        @csrf
        <div>
            {{ $replydata['reply'] }}
            <input type="hidden" name="reply" value="{{ $replydata['reply'] }}">
        </div>
        <div>
            <input type="submit" value="送信">  
        </div>
    </form>
</body>

</html>
