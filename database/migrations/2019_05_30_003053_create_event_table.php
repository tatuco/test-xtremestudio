<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->unique()->nullable();
            $table->string('description')->nullable();
            $table->date('date');
            $table->boolean('out_of_time')->default(false);
            $table->integer('event_id');
            $table->foreign('event_id')->references('id')->on('event_types')->onDelete('cascade');
            $table->boolean('check')->default(false);
            $table->boolean('deleted')->default(false);
            $table->integer('detention_id');
            $table->foreign('detention_id')->references('id')->on('detentions')->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
}
