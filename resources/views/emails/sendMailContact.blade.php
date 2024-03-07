<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせの件</title>
</head>

<body>
    {{-- メールの本文 --}}
    <h1>{{ $mailData['title'] }}</h1>
    <p>お問い合わせありがとうございます。</p>

    <p>
        問い合わせメールアドレス
    </p>
    <p>
        {{ $mailData['email'] }}
    </p>
    <p>
        問い合わせ内容
    </p>
    <p>
        {{ $mailData['body'] }}
    </p>

</body>

</html>
