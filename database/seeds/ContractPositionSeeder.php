<?php

use Illuminate\Database\Seeder;

class ContractPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //NEW-----------------------------------------------
        DB::table('contracts')->insert([
            'contract_id' => '4540002894',
            'position_id' => 3,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'contract_id' => '4540002870',
            'position_id' => 2,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'contract_id' => '4540002892',
            'position_id' => 1,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'contract_id' => '4540003012',
            'position_id' => 2,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'contract_id' => '4540003013',
            'position_id' => 1,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
