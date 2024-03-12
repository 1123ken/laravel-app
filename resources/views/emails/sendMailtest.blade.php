<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webappfix</title>
</head>

<body>
    <h1>このメールはHTML形式でお送りしてます</h1>
    <h2>このメールはテストメールです</h2>
    {{-- メールタイトル --}}
    <table style="border: solid 1px black">
        <tr style="border: solid 1px black">
            <td style="border: solid 1px black">
                {{ $mailData['title'] }}
            </td>
        </tr>
        <tr style="border: solid 1px black">
            <td style="border: solid 1px black">
                {{ $mailData['body'] }}
            </td>
        </tr>
    </table>
    このメールはテストメールです
    tableタグを使用してテスト送信しました
    CSSは要調整だと思います
</body>

</html>
