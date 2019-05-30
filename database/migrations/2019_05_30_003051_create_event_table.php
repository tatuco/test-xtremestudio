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
            $table->boolean('is_critical')->default(false);
            $table->boolean('is_pivote')->default(false);
            $table->boolean('check')->default(false);
            $table->boolean('deleted')->default(false);
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
