<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role_associations', function (Blueprint $table) {
            $table->increments('ura_id');
            $table->unsignedInteger('fk_urers_id');
            $table->unsignedInteger('fk_user_roles_id');
            $table->foreign('fk_urers_id')->references('users_id')->on('users');
            $table->foreign('fk_user_roles_id')->references('user_roles_id')->on('user_roles');
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
        Schema::table('user_role_associations',function($table){
                $table->dropForeign('fk_urers_id');
                $table->dropForeign('fk_user_roles_id');
        });
        Schema::dropIfExists('user_role_associations');
    }
}
