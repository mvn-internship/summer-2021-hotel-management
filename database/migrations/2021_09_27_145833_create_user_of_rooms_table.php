<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOfRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_of_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('address');
            $table->string('phone');
            $table->date('check_in');
            $table->integer('identity_card');
            $table->biginteger('room_id');
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
        Schema::dropIfExists('user_of_rooms');
    }
}
