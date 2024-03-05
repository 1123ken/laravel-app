<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('ログインしました！') }}
                </div>
                <div>
                    {{ __('現在の実装機能') }}
                    <ul>
                        <li>
                            {{ __('問い合わせ') }}
                        </li>
                        <li>
                            {{ __('laravel breezeでのログイン、新規登録') }}
                        </li>
                        <li>
                            {{ __('問い合わせ一覧表示、詳細、削除') }}
                        </li>
                        <li>
                            {{ __('メール送信機能作成') }}
                        </li>
                    </ul>
                </div>
                <div>
                    {{ __('未実装機能') }}
                    <ul>
                        <li>
                            {{ __('メール送信機能') }}
                        </li>
                        <li>
                            {{ __('問い合わせ一覧のページネーション機能') }}
                        </li>
                        <li>
                            {{ __('問い合わせ内容にカテゴリーを追加＋テーブルも変更') }}
                        </li>
                        <li>
                            {{ __('問い合わせ検索機能') }}
                        </li>
                        <li>
                            {{ __('その他ページの作りこみ') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
