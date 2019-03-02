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
            $table->string('name', 50);
            $table->string('last_name_p', 25);
            $table->string('last_name_m', 25);
            $table->date('date_birth')->nullable();
            $table->enum('civil_status', ['single', 'married','divorced'])->nullable();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->string('address', 255)->nullable();
            $table->string('email', 25)->unique()->nullable();
            //$table->integer('type_person_id');
            //$table->foreign('type_person_id')->references('id')->on('person_types');
            $table->enum('status_people', ['Asignado', 'Eliminado', 'Reserva']);
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
