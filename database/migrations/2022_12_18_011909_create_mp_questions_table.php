<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mp_questions', function (Blueprint $table) {
            $table->string('question');
            $table->integer('type'); //1-->primary, 2-->additional, 3--> suggestion, 4-->information
            $table->textarea('description');    
            $table->foreignId('member_of_parliament_id')->constrained('member_of_parliaments');
            $table->foreignId('targeted_group_id')->constrained('targeted_group');
            $table->foreignId('sector_field_id')->constrained('sector_fields');
            $table->foreignId('parliament_agenda_category_id')->constrained('parliament_agenda_categories');
            $table->foreignId('parliament_period_session_id')->constrained('parliament_period_sessions');
            $table->foreignId('parliament_agenda_id')->constrained('parliament_agendas')->nullable();
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
        Schema::dropIfExists('mp_questions');
    }
}
