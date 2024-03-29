<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>お問い合わせ</title>
</head>

<body>
    <h1>お問い合わせ</h1>
    <form method="post" action="{{ route('contactConfirm') }}">
        @csrf
        <div>
            <label for="text">メールアドレス</label>
        </div>
        <div>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="body">問い合わせ内容</label>
        </div>
        <div>
            <textarea name="body" id="body" required></textarea>
        </div>
        <div id="contactBtn">
            <input type="submit" value="確認">
            <input type="button" onclick="location.href='{{ route('welcome') }}';" value="戻る" id="inputBtn">
        </div>
    </form>
    <div>

</body>

</html>
