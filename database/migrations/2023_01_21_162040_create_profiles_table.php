<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //プロフィールに入力された名前を保存するカラム
            $table->string('gender'); //プロフィールに入力された性別を保存するカラム
            $table->string('hoddy'); //プロフィールに入力された趣味を保存するカラム
            $table->string('introduction'); //プロフィールに入力された自己紹介を保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
