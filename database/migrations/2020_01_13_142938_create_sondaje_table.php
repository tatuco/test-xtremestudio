<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesondajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probes', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->string('name')->unique()->nullable();
            $table->string('description')->nullable();
            $table->boolean('deleted')->default(false);
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('proyects');
            $table->integer('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');
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
        Schema::dropIfExists('probes');
    }
}
