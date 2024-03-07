<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('ログインしました！') }}
                </div>
                <div>
                    {{ __('*****現在の実装機能*****') }}
                    <br>
                    <ul>
                        <li>
                            {{ __('問い合わせ機能作成') }}
                        </li>
                        <li>
                            {{ __('laravel breezeでのログイン、新規登録') }}
                        </li>
                        <li>
                            {{ __('問い合わせ一覧表示、詳細、削除') }}
                        </li>
                        <li>
                            {{ __('非ログイン状態だとログインページにしか行かないとように変更 Middlewareブランチに作成') }}
                        </li>
                        <li>
                            {{ __('☆メール自動送信機能（新規登録時、問い合わせ完了時 確認済み）Mailable使用') }}
                        </li>
                        <li>
                            {{__('返信メールに問い合わせの内容や問い合わせをした人のメールアドレスを載せる')}}
                        </li>
                    </ul>
                </div>
                <br>
                <div>
                    {{ __('*****要実装機能*****') }}
                    <ul>
                        <li>
                            {{__('☆問い合わせ内容に対して返信メールを送れるようにする')}}
                        </li>
                        <li>
                            管理者の返信フォーム    replyMail.blade作成<br>
                            返信メールのひな型      replySendMail.blade作成<br>
                            追加する動作 ボタンを押したときにデータを渡すコントローラ？モデル？を作成<br>
                            送信前の確認ページの作成<br>
                            確認ページで問い合わせ内容と返信内容を分かりやすくするために表示させる<br>
                            問い合わせ内容はDBから持ってきて表示させる<br>
                        </li>
                        <br>
                        <li>
                            ☆問い合わせページからwelcomeに戻るボタンを作成
                        </li>
                        <br>
                        <li>******時間に余裕があれば*******</li>
                        <li>
                            {{ __('管理者ページと利用者ページが曖昧になっているので分ける。管理者用テーブルから読み取ったアカウントからdashboardに行ける。一般ユーザーはwelcomeで表示されている項目のみ') }}
                        </li>
                        <li>
                            {{ __('問い合わせ一覧のページネーション機能') }}
                        </li>
                        <li>
                            {{ __('発表資料作り3/12のAM中に') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
