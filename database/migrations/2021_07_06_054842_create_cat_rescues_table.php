<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatRescuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_rescues', function (Blueprint $table) {
            $table->id();
            $table->longtext('img')->comment('貓貓圖');
            $table->string('name')->comment('貓貓名');
            $table->integer('age')->comment('貓貓年紀');
            $table->boolean('gender')->comment('貓貓性別(0母1公)')->nullable();
            $table->string('location')->comment('所在縣市');
            $table->longtext('content')->comment('貓貓說明');
            $table->string('vaccine')->comment('貓貓預防針');
            $table->boolean('adopt')->comment('貓貓是否送養(送養就消失在前端)')->nullable();
            $table->integer('user_id')->comment('抓關聯使用者的暱稱和電話');
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
        Schema::dropIfExists('cat_rescues');
    }
}
