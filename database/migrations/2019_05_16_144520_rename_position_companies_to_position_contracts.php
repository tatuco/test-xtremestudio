<?php

use Illuminate\Database\Migrations\Migration;

class RenamePositionCompaniesToPositionContracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //rename table position_contracts to position_companies;
       // DB::connection()->getPdo()->exec("ALTER TABLE position_companies RENAME position_contracts;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
