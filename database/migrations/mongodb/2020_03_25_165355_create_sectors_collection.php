<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectorsCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("mongodb")->create('sectors', function (Blueprint $collection) {
         // $collection->index("code");
          $collection->unique("code");
       //   $collection->index("id"); php artisan migrate --database=mongodb --path=database/migrations/mongodb/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection("mongodb")
            ->table('sectors', function (Blueprint $collection)
            {
                $collection->drop();
            });
    }
}
