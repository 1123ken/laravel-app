<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <div>
        <form method="post" action="{{ route('contactComplete') }}">
            @csrf
            <label>メールアドレス</label><br>
            {{ $contacts['email'] }}<br>
            <input name="email" value="{{ $contacts['email'] }}" type="hidden"><br>

            <label>問い合わせ内容</label><br>
            {{ $contacts['body'] }}<br>
            <input name="body" value="{{ $contacts['body'] }}" type="hidden"><br>
            <input type="submit" value="登録">
        </form>
    </div>
</x-app-layout>