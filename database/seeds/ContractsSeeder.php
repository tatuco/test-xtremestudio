<?php

use Illuminate\Database\Seeder;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contracts')->insert([
            'cod_contract' => '00001',
            'description' => 'Desarrollo Yoplanifico',
            'start_date' => '2018-08-23',
            'end_date' => '2019-08-23',
            'endowment' => '10',
            'company_id' => '000-000-000',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
