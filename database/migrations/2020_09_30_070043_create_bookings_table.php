<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('room_id');
        $table->text('description');
        $table->date('arrival_date');
        $table->date('departure_date');
        $table->integer('num_room');
        $table->float('amount', 8, 2);
        $table->timestamps();

        $table->index('user_id');
        $table->index('room_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

