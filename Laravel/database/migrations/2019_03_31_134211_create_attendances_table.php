<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('attendances_id');
            $table->date('date');
            $table->unsignedInteger('fk_users_id');
            $table->unsignedInteger('fk_months_id');
            $table->foreign('fk_users_id','fk_users_ida')->references('users_id')->on('users');
            $table->foreign('fk_months_id','fk_months_ida')->references('months_id')->on('months');
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
        Schema::table('attendances',function ($table){
            $table->dropForeign('fk_users_ida');
            $table->dropForeign('fk_months_ida');
        });
        Schema::dropIfExists('attendances');
    }
}
