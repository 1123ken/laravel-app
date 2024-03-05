<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
<div>
        <form method="post" action="{{ route('contactIndex') }}">
            @csrf
            <input type="submit" value="戻る">
        </form>
    </div>
</x-app-layout>