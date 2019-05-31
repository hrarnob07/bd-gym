<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('user_profiles_id');
            $table->string('height');
            $table->string('weight');
            $table->string('boold_group');
            $table->string('status');
            $table->unsignedInteger('fk_ep_id');
            $table->date('exercise_start');
            $table->date('exercise_end');
            $table->foreign('fk_ep_id','fk_ep_idu')->references('ep_id')->on('exercise_packages');
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
        Schema::table('user_profiles',function ($table){
            $table->dropForeign('fk_ep_idu');
        });
        Schema::dropIfExists('user_profiles');
    }
}
