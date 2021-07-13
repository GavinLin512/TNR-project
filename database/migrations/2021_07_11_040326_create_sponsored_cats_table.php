<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsoredCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsored_cats', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('助養貓咪名字');
            $table->integer('user_id')->comment('抓會員資料');
            $table->integer('default_people')->comment('預設人數')->nullable();
            $table->longText('video_url')->comment('領養貓咪影片連結');
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
        Schema::dropIfExists('sponsored_cats');
    }
}
