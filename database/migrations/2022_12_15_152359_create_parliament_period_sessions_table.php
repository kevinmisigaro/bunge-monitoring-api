<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParliamentPeriodSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parliament_period_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('parliament_period');
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
        Schema::dropIfExists('parliament_period_sessions');
    }
}
