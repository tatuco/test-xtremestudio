<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->unique()->nullable();
            $table->string('description')->nullable();
            $table->integer('hall');
            $table->integer('face');
            $table->integer('box');
            $table->integer('width');
            $table->integer('long');
            $table->boolean('deleted')->default(false);
            $table->integer('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->string('probe_id');
            $table->foreign('probe_id')->references('id')->on('probes');
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
        Schema::dropIfExists('boxes');
    }
}
