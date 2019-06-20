<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class DropColumnsContractCompanyPositionCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::connection()->getPdo()->exec("ALTER TABLE position_companies DROP FOREIGN KEY position_companies_company_id_foreign");
        DB::connection()->getPdo()->exec("ALTER TABLE position_companies DROP FOREIGN KEY position_companies_contract_id_foreign");
        DB::connection()->getPdo()->exec("ALTER TABLE position_companies DROP COLUMN company_id");
        DB::connection()->getPdo()->exec("ALTER TABLE position_companies DROP COLUMN contract_id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
