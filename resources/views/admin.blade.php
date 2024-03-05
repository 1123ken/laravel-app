<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <h1>問い合わせ内容一覧</h1>
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
                        <a href="{{ route('contactBody', ['id'=>$contact->id]) }}" >
                            <button type="button">詳細</button>
                        </a>
                        <form action="{{ route('destroy',['id'=>$contact->id]) }}" method="post">
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-app-layout>
