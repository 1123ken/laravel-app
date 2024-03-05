<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body> 
    <div id="admin_btn">
        {{-- 管理者ログインページに画面遷移 --}}
        <a href="{{ route('admin') }}">
            <button type="button">管理者画面</button>
        </a>
    <h1>お問い合わせフォーム</h1>
    <!-- お問い合わせ内容入力フォーム -->
    <form method="post" action="{{ route('confirm') }}">
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
            <input type="submit" value="確認">
        </div>

    </form>
</body>
</html> 
