<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>問い合わせ詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>問い合わせ内容詳細</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>
                        メールアドレス
                    </th>
                </tr>
            </thead>
            <tr>
                <td>
                    {{ $data->email }}
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>
                        問い合わせ内容
                    </th>
                </tr>
            </thead>
            <tr>
                <td>
                    {!! nl2br(e($data->body)) !!}
                </td>
            </tr>
        </table>
    </div>
    <div>
        <button onclick="location.href='/admin'">戻る</button>
        <button onclick="location.href='/index'">TOPへ</button>
    </div>
</body>

</html>
