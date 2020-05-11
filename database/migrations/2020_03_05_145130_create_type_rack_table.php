<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeRackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_racks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->integer('quantity');
            $table->integer('floors')->default(1);
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
        Schema::dropIfExists('type_racks');
    }
}
