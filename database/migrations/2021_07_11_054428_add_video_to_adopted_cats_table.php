<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoToAdoptedCatsTable extends Migration
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
            $table->longText('video_url')->comment('領養貓咪影片連結');
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
            $table->dropColumn('video_url');
        });
    }
}
