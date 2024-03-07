<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <h1>テストページです</h1>
    多分メールが送信されてます
    <div>
        <form method="post" action="{{ route('welcome') }}">
            @csrf
            <input type="submit" value="戻る">
        </form>
    </div>
</x-app-layout>
