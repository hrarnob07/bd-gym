<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('events_id');
            $table->unsignedInteger('fk_users_id');
            $table->date('events_start');
            $table->date('events_end');
            $table->string('name');
            $table->boolean('event_status');
            $table->foreign('fk_users_id','fk_users_ide')->references('users_id')->on('users');
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
        Schema::table('events',function ($table){
            $table->dropForeign('fk_users_ide');
        });
        Schema::dropIfExists('events');
    }
}
