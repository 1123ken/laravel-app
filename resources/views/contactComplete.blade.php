<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>受付しました</title>
</head>

<body>
    <div>
        <h1>お問い合わせありがとうございます。</h1>
        <form method="post" action="{{ route('contactIndex') }}">
            @csrf
            <input type="submit" value="戻る">
        </form>
    </div>

</body>

</html>
