<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePersonIdForEmployeIdInAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getPdo()->exec("alter table accesses drop foreign key accesses_person_id_foreign;");
        DB::connection()->getPdo()->exec("drop index accesses_person_id_foreign on accesses;");
        DB::connection()->getPdo()->exec("alter table accesses drop column person_id;");
        DB::connection()->getPdo()->exec("alter table accesses add employe_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table accesses
	                                      add constraint accesses_employes_id_fk
                                          foreign key (employe_id) references employes (id);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accesses', function (Blueprint $table) {
            //
        });
    }
}
