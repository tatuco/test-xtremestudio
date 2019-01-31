<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->char('id', 25)->primary();
            $table->string('image')->nullable();
            $table->string('thumbprint', 255)->nullable()->unique();
            $table->string('name', 25);
            $table->string('last_name', 25);
            $table->date('date_birth');
            $table->enum('sex', ['male', 'female']);
            $table->integer('type_person_id');
            $table->foreign('type_person_id')->references('id')->on('person_types');
            $table->char('company_id', 25);
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('people');
    }
}
