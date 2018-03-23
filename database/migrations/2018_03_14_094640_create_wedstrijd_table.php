<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWedstrijdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedstrijd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_thuis');
            $table->string('team_uit');
            $table->string('team_scheidsrechter');
            $table->timestamp('tijd');
            $table->date('datum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedstrijd');
    }
}
