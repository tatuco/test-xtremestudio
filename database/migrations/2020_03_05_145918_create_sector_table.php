<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('code');
            $table->integer('high');
            $table->integer('width');
            $table->text('racks');
            $table->string('norte')->default("Norte");
            $table->string('sur')->default("Sur");
            $table->string('description')->nullable();
            $table->boolean('deleted')->default(false);
            $table->integer('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->integer('type_rack_id');
            $table->foreign('type_rack_id')->references('id')->on('type_racks');
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
        Schema::dropIfExists('sectors');
    }
}
