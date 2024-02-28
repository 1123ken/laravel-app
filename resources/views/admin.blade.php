<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理者画面</title>
</head>
<body>
    <h1>管理者画面  </h1>
        <table>
            <thead>
                <tr>
                    <th>メールアドレス</th>
                    <th>本文</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact ->email }}</td>
                    <td>{{ $contact ->body }}</td>
                    <td><a href="{{ route('showContact', ['id'=> $contact->id]) }}">詳細</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>
