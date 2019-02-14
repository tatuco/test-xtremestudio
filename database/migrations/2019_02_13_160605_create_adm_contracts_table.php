<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateadmcontractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('people_id', 25);
            $table->foreign('people_id')->references('id')->on('people');
            $table->char('company_id', 25);
            $table->foreign('company_id')->references('id')->on('companies');
            $table->char('contract_id', 25);
            $table->foreign('contract_id')->references('cod_contract')->on('contracts');
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
        Schema::dropIfExists('admcontracts');
    }
}
