<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSponsorToSponsoredCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sponsored_cats', function (Blueprint $table) {
            //
            $table->string('sponsor')->comment('助養會員');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sponsored_cats', function (Blueprint $table) {
            //
            $table->dropColumn('sponsor');
        });
    }
}
