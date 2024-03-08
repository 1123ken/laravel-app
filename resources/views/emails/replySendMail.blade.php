<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ返信フォーム</title>
</head>

<body>
    <p>お問い合わせありがとうございます</p>
    <p>お問合せいただいた内容は以下の通りになります。</p>
    <div>
        <p>お客様のアドレス</p>
        <p>{{ $maildata['email'] }}</p>
        <p>お問い合わせ内容</p>
        <p>{{ $maildata['body'] }}</p>
    </div>

    <p>このお問い合わせについてのご回答はこちらになります。</p>
    <div>
        <p>{{ $maildata['reply'] }}</p>
    </div>
    <div>
        <p>不明点があればこのメールをそのままご返信ください</p>
        <p>どうぞよろしくお願いします。</p>
    </div>
    {{-- 以降お互いのメーラー間でやり取りをする --}}
    {{-- 現状フォームだけでやるとちょっと厳しい… --}}
</body>

</html>
