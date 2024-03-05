<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <h1>お問い合わせ</h1>
    <form method="post" action="{{ route('contactConfirm') }}">
        @csrf
        <div>
            <label for="text">メールアドレス</label>
        </div>
            <input type="email" name="email" id="email" required>
        <div>
            <label for="body">問い合わせ内容</label>
        </div>
            <textarea name="body" id="body" required></textarea>
        <div>
            <input type="submit" value="確認">
        </div>
    </form>
</x-app-layout>
