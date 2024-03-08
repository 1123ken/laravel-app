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
                        <input type="hidden" name="email" value="{{ $data->email}}">
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
                            <input type="hidden" name="body" value="{{ $data->body}}">
                        </td>
            </div>
            </tr>
            </table>
        </div>
        <div id="reply">
            <h1>問い合わせに対しての返信</h1>
        </div>
        <div id="reply">
            <textarea name="reply" id="replyarea" required></textarea>
        </div>
        <input type="submit" value="確認">
    </form>
    <div id="reply">
        <button onclick="location.href='/admin'">戻る</button>
    </div>
</x-app-layout>
