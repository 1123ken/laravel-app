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
    {{-- {{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。 --}}
    {{-- <form action="{{route(' logout')}}" method="post">
        @csrf
        <button>ログアウト</button>
    </form> --}}
        <table>
            <thead>
                <tr>
                    <th>問い合わせ番号</th>
                    <th>問い合わせユーザー名（アドレス）</th>
                    <th>操作</th>
                </tr>   
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact ->id }}</td>
                    <td>{{ $contact ->email }}様</td>
                    <td>
                        <form method="post" action="{{ route('contactBody') }}">
                            @csrf
                            <input type="submit" value="詳細">  
                        </form>
                            <input type="submit" value="削除">  
                        </a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <button onclick="location.href='/login'" id="btn_back">戻る</button>
</body>

</html>
