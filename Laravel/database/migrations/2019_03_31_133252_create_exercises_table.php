<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('exercises_id');
            $table->unsignedInteger('fk_ep_id');
            $table->string('exercises_name');
            $table->string('link');
            $table->string('remarks');
            $table->foreign('fk_ep_id','fk_ep_ids')->references('ep_id')->on('exercise_packages');
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
        Schema::table('exercises',function ($table){
            $table->dropForeign('fk_ep_ids');
        });
        Schema::dropIfExists('exercises');
    }
}
