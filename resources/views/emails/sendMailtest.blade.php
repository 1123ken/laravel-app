<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webappfix</title>
</head>

<body>
    {{-- メールタイトル --}}
	<h1>{{ $mailData['title'] }}</h1>
    {{-- メールの本文 --}}
	<p>{{ $mailData['body'] }}</p>
	<p>テストメールです</p>
</body>
</html>