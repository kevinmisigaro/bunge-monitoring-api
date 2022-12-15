<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionSittingAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_sitting_agendas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sector');
            $table->timestamps();
            $table->foreignId('parliaments_periods_session_sittings_id')->constrained('parliaments_periods_session_sittings');
            $table->foreignId('session_sitting_agenda_categories_id')->constrained('session_sitting_agenda_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_sitting_agendas');
    }
}
