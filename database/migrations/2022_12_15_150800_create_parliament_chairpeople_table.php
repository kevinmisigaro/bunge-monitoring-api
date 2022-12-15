<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParliamentChairpeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parliament_chairpeople', function (Blueprint $table) {
            $table->id();
            $table->string('chairperson');
            $table->timestamps();
            $table->foreignId('parliaments_periods_id')->constrained('parliaments_periods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parliament_chairpeople');
    }
}
