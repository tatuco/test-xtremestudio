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
            'user_id' => 1,
            'adm_aux_id' => 2,
            'admec_id' => 3,
            'admec_aux_id' => 4,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('contracts')->insert([
            'cod_contract' => '00002',
            'description' => 'Desarrollo Noplanifico',
            'start_date' => '2018-08-23',
            'end_date' => '2019-08-23',
            'endowment' => '15',
            'company_id' => '000-000-000',
            'user_id' => 1,
            'adm_aux_id' => 2,
            'admec_id' => 3,
            'admec_aux_id' => 4,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('contracts')->insert([
            'cod_contract' => '00003',
            'description' => 'Desarrollo Siplanifico',
            'start_date' => '2018-08-23',
            'end_date' => '2019-08-23',
            'endowment' => '13',
            'company_id' => '000-000-000',
            'user_id' => 1,
            'adm_aux_id' => 2,
            'admec_id' => 3,
            'admec_aux_id' => 4,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('contracts')->insert([
            'cod_contract' => '00004',
            'description' => 'Desarrollo Clasico',
            'start_date' => '2018-08-12',
            'end_date' => '2019-08-23',
            'endowment' => '19',
            'company_id' => '000-000-000',
            'user_id' => 1,
            'adm_aux_id' => 2,
            'admec_id' => 3,
            'admec_aux_id' => 4,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('contracts')->insert([
            'cod_contract' => '00005',
            'description' => 'Desarrollo',
            'start_date' => '2018-08-19',
            'end_date' => '2019-08-23',
            'endowment' => '08',
            'company_id' => '000-000-000',
            'user_id' => 1,
            'adm_aux_id' => 2,
            'admec_id' => 3,
            'admec_aux_id' => 4,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
