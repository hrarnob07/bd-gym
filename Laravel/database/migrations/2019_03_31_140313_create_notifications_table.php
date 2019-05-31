<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('notifications_id');
            $table->unsignedInteger('fk_users_id');
            $table->tinyInteger('status');
            $table->string('notification_body');
            $table->foreign('fk_users_id','fk_users_idn')->references('users_id')->on('users');
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
            $table->dropForeign('fk_users_idn');
        });
        Schema::dropIfExists('notifications');
    }
}
