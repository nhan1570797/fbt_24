<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname');
            $table->integer('phone');
            $table->string('address');
            $table->integer('role');
            $table->string('gender');
            $table->unsignedInteger('identity_card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'fullname',
                'phone',
                'address',
                'role',
                'gender',
                'identity_card',
            ]);
        });
    }
}
