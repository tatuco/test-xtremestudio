<?php

use Illuminate\Database\Seeder;

class AdmContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adm_contracts')->insert([
            'people_id' => '24356393',
            'company_id' => '000-000-000',
            'contract_id' => '00001',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
