<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublishDateToDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diaries', function (Blueprint $table) {
            //
            $table->string('publish_date')->comment('發布日期');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diaries', function (Blueprint $table) {
            //
            $table->dropColumn('publish_date');
        });
    }
}
