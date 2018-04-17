<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUitslagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uitslag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uitslag_thuis');
            $table->string('uitslag_uit');
            $table->string('set1_thuis');
            $table->string('set1_uit');
            $table->string('set2_thuis');
            $table->string('set2_uit');
            $table->string('set3_thuis');
            $table->string('set3_uit');
            $table->string('set4_thuis');
            $table->string('set4_uit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uitslag');
    }
}
