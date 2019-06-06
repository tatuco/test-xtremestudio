<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->unique();
            $table->string('directory');
            $table->boolean('deleted')->default(false);
            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('file_types')->onDelete('cascade');
            $table->char('detention_id');
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
        Schema::dropIfExists('files');
    }
}
