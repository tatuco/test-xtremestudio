<?php

use Illuminate\Database\Seeder;

class TypeRackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_racks')->insert([
            'name' => '26 Bandejas',
            'quantity' => 26,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'account_id' => 1
        ]);

        DB::table('type_racks')->insert([
            'name' => '33 Bandejas',
            'quantity' => 33,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'account_id' => 1
        ]);

        DB::table('type_racks')->insert([
            'name' => '4 Pisos * 50 Bandejas',
            'quantity' => 200,
            'floors' => 4,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'account_id' => 1
        ]);

    }
}
