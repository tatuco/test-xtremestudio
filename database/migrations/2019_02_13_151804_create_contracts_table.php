<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecontractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('cod_contract')->unique()->nullable();
            $table->string('description', 255)->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('endowment');
            $table->char('company_id', 25);
            $table->foreign('company_id')->references('id')->on('companies');
            $table->char('user_id', 25)->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('people')->onDelete('cascade');
            $table->char('adm_aux_id', 25)->unsigned()->index();
            $table->foreign('adm_aux_id')->references('id')->on('people')->onDelete('cascade');
            $table->char('admec_id', 25)->unsigned()->index();
            $table->foreign('admec_id')->references('id')->on('people')->onDelete('cascade');
            $table->char('admec_aux_id', 25)->unsigned()->index();
            $table->foreign('admec_aux_id')->references('id')->on('people')->onDelete('cascade');
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
        Schema::dropIfExists('contracts');
    }
}
