<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <div id="contact">
        <h1>お問い合わせ内容</h1>
    </div>
    <form method="get" action="{{ route('replyConfirm') }}">
        @csrf
        <div id="contact">
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
                        <input type="hidden" name="email" value="{{ $data->email }}">
                    </td>
                </tr>
            </table>
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
                            <input type="hidden" name="body" value="{{ $data->body }}">
                        </td>
            </div>
            </tr>
            </table>
        </div>
        <div id="reply">
            <table>
                <tr>
                    <th>
                        問い合わせに対しての返信
                    </th>
                </tr>
                <tr>
                    <td>
                        <textarea name="reply" id="replyarea" required></textarea>
                    </td>
            </table>
            <input type="submit" value="確認" id="inputBtn">
            <input type="button" onclick="history.back()" value="戻る" id="inputBtn">
</x-app-layout>
