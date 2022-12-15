<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentationTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representation_tracks', function (Blueprint $table) {
            $table->id();
            $table->string('duration');
            $table->string('mode');
            $table->string('constituency');
            $table->timestamps();
            $table->foreignId('member_of_parliaments_id')->constrained('member_of_parliaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representation_tracks');
    }
}
