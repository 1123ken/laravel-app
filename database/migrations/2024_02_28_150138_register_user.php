<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{   
    //ユーザー登録
    public function up(): void
    {
        Schema::create('register_user', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();  //メールアドレス（ID）
            $table->string('password');         //パスワード
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('register_user');
    }
};
