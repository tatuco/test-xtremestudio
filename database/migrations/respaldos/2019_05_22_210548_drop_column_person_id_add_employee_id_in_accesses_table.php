<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnPersonIdAddEmployeeIdInAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//accesses_person_id_foreign
    //    DB::connection()->getPdo()->exec("ALTER TABLE accesses DROP FOREIGN KEY accesses_person_id_foreign;");
      //  DB::connection()->getPdo()->exec("ALTER TABLE accesses DROP COLUMN person_id;");
        //
//        DB::connection()->getPdo()->exec("ALTER TABLE accesses ADD employe_id int not null;");
        DB::connection()->getPdo()->exec("alter table accesses ".
                                            "add constraint accesses_employe_id_foreign ".
                                                "foreign key (employe_id) references employes (rut) ".
                                                    "on delete cascade;");
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
