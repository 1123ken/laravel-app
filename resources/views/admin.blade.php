<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <div>
        <h1>問い合わせ内容一覧</h1>
    </div>
    <table id="contacCulumn">
        <thead>
            <tr>
                <th>問い合わせ番号</th>
                <th>問い合わせメールアドレス</th>
                <th id="contactBtn">操作</th>
            </tr>
        </thead>
        <tbody id="contact">
            @foreach ($contacts as $contact)
                <tr>
                    <td id="contactNum">{{ $contact->id }}</td>
                    <td id="contactList">{{ $contact->email }}様</td>
                    <td id="contactBtn">
                        <a href="{{ route('contactBody', ['id' => $contact->id]) }}">
                            <button type="button">詳細</button>
                        </a>
                        <form action="{{ route('destroy', ['id' => $contact->id]) }}" method="post">
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
