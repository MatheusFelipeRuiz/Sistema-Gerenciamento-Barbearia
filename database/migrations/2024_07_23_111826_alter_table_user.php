<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->unsignedBigInteger('role_id')->after('name');

            $table->foreign('role_id')->references('id')->on('roles');
        });
    }
    // public function up()
    // {
    //     Schema::create('role_users', function (Blueprint $table) {
    //         $table->id();
    //         $table->unsignedBigInteger('user_id');
    //         $table->unsignedBigInteger('role_id');
    //         $table->timestamps();

    //         $table->foreign('user_id')->references('id')->on('users');
    //         $table->foreign('role_id')->references('id')->on('roles');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('users_role_id_foreign');
            $table->dropColumn('role_id');
        });
    }
    // public function down()
    // {
    //     Schema::dropIfExists('role_user');
    // }
}
