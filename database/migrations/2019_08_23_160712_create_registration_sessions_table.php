<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registration_id')->default(0);
            $table->unsignedInteger('session_id')->default(0);
            $table->tinyInteger('rating')->nullable();

            $table->foreign('registration_id')
                ->references('id')
                ->on('registrations');

            $table->foreign('session_id')
                ->references('id')
                ->on('sessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_sessions');
    }
}
