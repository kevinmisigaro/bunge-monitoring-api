<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParliamentAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parliament_agendas', function (Blueprint $table) {
            $table->id();
            $table->string('agenda_name');
            $table->foreignId('parliament_period_session_id')->constrained('parliament_period_sessions');
            $table->foreignId('parliament_agenda_categorry_id')->constrained('parliament_agenda_categories');
            $table->foreignId('sector_id')->constrained()->nullable();
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
        Schema::dropIfExists('parliament_agendas');
    }
}
