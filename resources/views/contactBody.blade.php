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
                            {{-- body内の改行\nを<br>に変換するためにnl2brを使用する --}}
                            {!! nl2br(e($data->body)) !!}
                            <input type="hidden" name="body" value="{{ $data->body }}">
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- 返信内容の表示（時間がなくて断念） --}}
        {{-- repliesテーブルのreplyを引っ張ってきてどんな内容で返信したか表示 --}}
        {{-- 可能ならadminページで返信の有無を表示する機能とかもあっていいのかなと思った --}}
        {{-- <h2>前回の返事</h2>
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
                    <td> --}}
                        {{-- body内の改行\nを<br>に変換するためにnl2brを使用する --}}
                        {{-- {!! nl2br(e($replyData->reply)) !!}
                    </td>
                </tr>
            </table>
        </div> --}}


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
