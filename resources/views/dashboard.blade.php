<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h1>ログインしました！</h1>
                <div>
                    {{ __('*****実装完了機能*****') }}
                    <br>
                    <ul>
                        <li>
                            {{ __('問い合わせ機能 (developブランチ)') }}
                        </li>
                        <li>
                            {{ __('breezeを使用した ログイン、新規登録機能 (developブランチ)') }}
                        </li>
                        <li>
                            {{ __('認証機能(非ログイン状態時だとログインページしか表示されない) (Middlewareブランチ)') }}
                        </li>
                        <li>
                            {{ __('メール自動送信機能（新規登録時、問い合わせ完了時 確認済み）(Mailableブランチ)') }}
                        </li>
                        <li>
                            {{__('問い合わせ詳細ページで問い合わせ送信者にメール返信機能 (Mailable_replyブランチ)')}}
                        </li>
                        <li>
                            {{ __('問い合わせ一覧表示(降順)、詳細、削除機能 ペジネーション機能 (paginateブランチ)') }}
                        </li>
                        <li>
                            {{ __('mainブランチにマージ済み') }}
                        </li>
                    </ul>
                </div>
                <br>
                <div>
                    <ul>
                        <br>
                        <li>{{ __('*****問題点*****')}}</li>
                        <li>
                            {{ __('管理者と一般ユーザーがごちゃ混ぜになっている') }}
                        </li>
                        <li>
                            {{ __('問い合わせに対して返信したかどうかがテーブルを確認しないとわからない')}}
                        </li>
                        <li>
                            {{ __('cssの分け方がめちゃくちゃ、ID依存になってる')}}
                        </li>
                        <li>
                            {{ __('メールのデザイン調整')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
