<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご登録の件</title>
</head>

<body>
    {{-- メールタイトル --}}
    <h1>{{ $mailData['title'] }}</h1>
    {{-- メールの本文 --}}
    <p>{{ $mailData['body'] }}</p>
    <p>登録ユーザー名</p>
    <p>{{ $mailData['name'] }}</p>
    <p>登録メールアドレス</p>
    <p>{{ $mailData['email'] }}</p>
    <p>パスワードは表示できません</p>
</body>

</html>
