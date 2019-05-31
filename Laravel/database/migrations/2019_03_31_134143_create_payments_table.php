<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payments_id');
            $table->unsignedInteger('fk_users_id');
            $table->unsignedInteger('fk_months_id');
            $table->double('amount');
            $table->date('payment_date');
            $table->foreign('fk_users_id','fk_users_ids')->references('users_id')->on('users');
            $table->foreign('fk_months_id','fk_months_ids')->references('months_id')->on('months');
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
        Schema::table('payments',function ($table){
            $table->dropForeign('fk_users_ids');
            $table->dropForeign('fk_months_ids');
        });
        Schema::dropIfExists('payments');
    }
}
