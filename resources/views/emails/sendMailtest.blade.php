<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webappfix</title>
</head>

<body>
    <h1>メールの文章はHTML形式で記入できる</h1>
    <p>sendMailtestでテスト用の文章を作成してる</p>
    {{-- メールタイトル --}}
	<p>{{ $mailData['title'] }}</p>
    {{-- メールの本文 --}}
	<p>{{ $mailData['body'] }}</p>
	<p>テストメールです</p>
</body>
</html>