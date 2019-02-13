<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepositioncompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_companies', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable();
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
        Schema::dropIfExists('positioncompanies');
    }
}
