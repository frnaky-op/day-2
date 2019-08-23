<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id')->default(0);
            $table->enum('type', [
                'talk',
                'workshop',
            ])->default('talk');
            $table->string('title')->default('');
            $table->string('speaker')->default('');
            $table->integer('cost')->default(0);
            $table->dateTime('start');
            $table->dateTime('end');
            $table->text('description')->nullable();

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
