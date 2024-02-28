<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理者画面</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>管理者画面</h1>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>メールアドレス</th>
                    <th>本文</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact ->id }}</td>
                    <td>{{ $contact ->email }}</td>
                    <td>{{ $contact ->body }}</td>
                    <td>
                        <button onclick="location.href=' '">詳細</button>
                        <button onclick="location.href=' '">削除</button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <button onclick="location.href='/login'" id="btn_back">戻る</button>
</body>

</html>
