<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaterequirementspeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements_people', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description')->nullable();
            $table->char('people_id', 25);
            $table->foreign('people_id')->references('id')->on('people');
            $table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->char('contract_id', 25);
            $table->foreign('contract_id')->references('cod_contract')->on('contracts');
            $table->enum('check', ['active', 'disabled']);
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
        Schema::dropIfExists('requirementspeoples');
    }
}
