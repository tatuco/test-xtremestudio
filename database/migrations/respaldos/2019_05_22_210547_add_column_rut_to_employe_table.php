<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRutToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("alter table employes
                            add rut int not null;
                        alter table employes modify rut int not null first;
                        alter table employes
                            add constraint employes_pk
                                primary key (rut);");
        DB::connection()->getPdo()->exec("ALTER TABLE employes DROP COLUMN id;");
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
