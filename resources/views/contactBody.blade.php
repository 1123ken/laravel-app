<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>問い合わせ詳細</title>
</head>

<body>
    <h1>問い合わせ内容詳細</h1>
    <div>
        <table>
            <tr>メールアドレス</tr>
            <tr>
                {{-- <input type="hidden" value="{{ $data->email }}"> --}}
                {{-- {{ $data->email }} --}}
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>問い合わせ内容</tr>
            <tr>
                {{-- <input type="hidden" value="{{ $data->body }}"> --}}
                {{-- {!! nl2br(e($data->body)) !!} --}}
            </tr>
        </table>
    </div>
    <button onclick="location.href='/admin'">戻る</button>
    <button onclick="location.href='/index'">TOPへ</button>
</body>

</html>
