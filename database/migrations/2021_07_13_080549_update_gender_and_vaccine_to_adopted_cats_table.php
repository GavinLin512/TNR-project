<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGenderAndVaccineToAdoptedCatsTable extends Migration
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
            $table->string('gender')->change();
            $table->string('vaccine')->change();
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
            $table->boolean('gender');
            $table->boolean('vaccine');
        });
    }
}
