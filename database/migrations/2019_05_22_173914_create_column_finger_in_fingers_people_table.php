<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnFingerInFingersPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*
        *   alter table fingers_people
	        add finger blob default null null;
        */
         DB::connection()->getPdo()->exec("ALTER TABLE fingers_people ADD finger BLOB DEFAULT NULL;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection()->getPdo()->exec("ALTER TABLE fingers_people DROP COLUMN finger;");
    }
}
