<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepeoplecompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_companies', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('people_id', 25);
            $table->foreign('people_id')->references('id')->on('people');
            $table->char('company_id', 25);
            $table->foreign('company_id')->references('id')->on('companies');
            $table->char('position_company', 255);
            //$table->foreign('position_id')->references('id')->on('position_companies');
            $table->char('contract_id', 255);
            $table->foreign('contract_id')->references('cod_contract')->on('contracts');
            //$table->enum("type_contract", ["NULL", "spot", "fixet"]);
            //$table->enum("type_employee", ["NULL", "direct", "indirect"]);
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
        Schema::dropIfExists('peoplecompanies');
    }
}
