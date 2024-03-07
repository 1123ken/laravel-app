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
    <div>
        {{ $maildata['email']}}
    </div>
    <p>問い合わせ内容</p>
    <div>
        {{ $maildata['body']}}
    </div>
    
    <h1>問い合わせ返信フォーム</h1>
    <form method="post" action="{{ route('contactConfirm') }}">
        @csrf
        <div>
            <textarea name="replybody" id="replybody" required></textarea>
        </div>
        <div>
            <input type="submit" value="確認">
        </div>
    </form>
</body>

</html>
