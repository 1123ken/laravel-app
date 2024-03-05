<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body> 
    <!-- お問い合わせ内容入力フォーム -->
    <form method="post" action="{{ route('contactConfirm') }}">
        @csrf
        <div>
            {{-- メールアドレス email --}}
            <label for="text">メールアドレス</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            {{-- 問い合わせ　本文 body --}}
            <label for="body">問い合わせ内容</label>
            <textarea name="body" id="body" required></textarea>
        </div>
        {{-- 登録ボタン --}}
        <div>
            <button>確認</button>
        </div>
        <div>
            <button onclick="location.href='/'">TOP</button>
        </div>
    </form>
</body>
</html> 
