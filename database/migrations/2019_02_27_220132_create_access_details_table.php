<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_details', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['input', 'output']);
            $table->integer('access_id');
            $table->foreign('access_id')->references('id')->on('accesses')->onDelete('cascade');
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
        Schema::dropIfExists('access_details');
    }
}
