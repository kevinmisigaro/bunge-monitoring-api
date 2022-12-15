<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernmentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government_responses', function (Blueprint $table) {
            $table->id();
            $table->string('response_title');
            $table->textarea('description');
            $table->timestamps();
            $table->foreignId('member_of_parliaments_id')->constrained('member_of_parliaments');
            $table->foreignId('parliaments_period_session_sittings_id')->constrained('parliament_periods_session_sittings');
            $table->foreignId('session_sitting_agenda_categories_id')->constrained('session_sitting_agenda_categories');
            $table->foreignId('session_sitting_agenda_id')->constrained('session_sitting_agendas');
            $table->foreignId('targeted_group_id')->constrained('targeted_groups');
            $table->foreignId('economic_sector_id')->constrained('economic_sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('government_responses');
    }
}
