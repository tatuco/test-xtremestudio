<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaterackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racks', function (Blueprint $table) {
            $table->string('id');
            $table->string('probe')->nullable();
            $table->text('boxes');
            $table->integer('hall');
            $table->integer('lot');
            $table->integer('columna');
            $table->string('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('racks');
    }
}
