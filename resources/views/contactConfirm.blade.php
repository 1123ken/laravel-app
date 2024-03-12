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
        <h1>お問い合わせ内容確認</h1>
        <form method="post" action="{{ route('contactComplete') }}">
            @csrf
            <table id="confirm">
                <tr>
                    <th>メールアドレス</th>
                </tr>
                <td>
                    {{ $contacts['email'] }}<br>
                    <input name="email" value="{{ $contacts['email'] }}" type="hidden"><br>
                </td>
                <tr>
                    <th>お問い合わせ内容</th>
                </tr>
                <td>
                    {{ $contacts['body'] }}<br>
                </td>
            </table>
            <input name="body" value="{{ $contacts['body'] }}" type="hidden"><br>
            <input type="submit" value="登録" id="inputBtn">
            <input type="button" onclick="history.back()" value="修正" id="inputBtn">
        </form>
    </div>

</body>

</html>
