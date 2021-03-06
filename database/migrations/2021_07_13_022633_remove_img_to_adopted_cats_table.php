<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveImgToAdoptedCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adopted_cats', function (Blueprint $table) {
            //
            $table->dropColumn('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adopted_cats', function (Blueprint $table) {
            //
            $table->longText('img')->comment('貓貓圖');
        });
    }
}
