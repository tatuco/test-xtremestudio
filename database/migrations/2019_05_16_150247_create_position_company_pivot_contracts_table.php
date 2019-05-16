<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionCompanyPivotContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_company_pivot_contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('contract_id', 25);
            $table->foreign('contract_id')->references('cod_contract')->on('contracts');
            $table->integer('position_id');
            $table->foreign('position_id')->references('id')->on('position_companies');
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
        Schema::dropIfExists('position_company_pivot_contracts');
    }
}
