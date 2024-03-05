<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
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
    <button onclick="location.href='">返信</button>
    <button onclick="location.href='/admin'">戻る</button>
</x-app-layout>