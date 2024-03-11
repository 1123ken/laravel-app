<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>問い合わせ返信フォーム</title>
</head>

<body>
    <h1>返信内容確認</h1>
    <form method="post" action="{{ route('replyComplete') }}">
        @csrf
        {{-- 問い合わせ内容 --}}
        <div>
            <table id="confirm">
                <tr>
                    <th>お問い合わせメールアドレス</th>
                </tr>
                <tr>
                    <td>{{ $replydata['email'] }}
                        <input type="hidden" name="email" value="{{ $replydata['email'] }}">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                </tr>
                <tr>
                    <td>
                        {{ $replydata['body'] }}
                        <input type="hidden" name="body" value="{{ $replydata['body'] }}">
                    </td>
                </tr>
            </table>
        </div>

        {{-- 返信確認 --}}
        <div>
            <table id="replyspace">
                <tr>
                    <th>返信内容</th>
                </tr>
                <tr>
                    <td>
                        {{ $replydata['reply'] }}
                        <input type="hidden" name="reply" value="{{ $replydata['reply'] }}">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <input type="submit" value="送信" id="inputBtn">
            <input type="button" onclick="history.back()" value="修正" id="inputBtn">
        </div>
    </form>
</body>

</html>
