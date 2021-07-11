<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatedCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donated_cats', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('標題');
            $table->integer('donate_price')->comment('每名額捐款金額');
            $table->integer('people_number')->comment('需求人數');
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
        Schema::dropIfExists('donated_cats');
    }
}
