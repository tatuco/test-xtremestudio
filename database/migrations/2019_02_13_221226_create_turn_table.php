<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description')->nullable();
            $table->integer('working_days')->nullable();
            $table->integer('break_days')->nullable();
            $table->enum('shift', ['diurnal', 'night']);
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
        Schema::dropIfExists('turns');
    }
}
