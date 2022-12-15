<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParliamentPeriodSessionSittingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parliament_period_session_sittings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('parliament_session');
            $table->timestamps();
            $table->foreignId('parliament_periods_id')->constrained('parliament_periods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parliament_period_session_sittings');
    }
}
