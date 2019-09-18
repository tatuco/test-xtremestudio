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

    //NEW-----------------------------------------------
        DB::table('contracts')->insert([
            'cod_contract' => 'MA1020035916/10',
            'description' => 'MA1020035916/10',
            'start_date' => '2019/09/17',
            'end_date' => '2021/06/30',
            'endowment' => 30,
            'company_id'=> 1,
            'user_id'=> '012691151-3',
            'adm_aux_id'=> '017387633-5',
            'admec_id'=> '013426315-6',
            'admec_aux_id'=> '016051322-5',
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
