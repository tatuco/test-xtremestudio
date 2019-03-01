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
    //NEW-----------------------------------------------
        DB::table('contracts')->insert([
            'cod_contract' => '4540002894',
            'description' => ' MA1020035916/10 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE CHANCADO PRIMARIO Y PLANTA CHANCADO SECUNDARIO Y TERCIARIO.',
            'start_date' => '4/27/18 0:00',
            'end_date' => '6/30/21 0:00',
            'endowment' => 30,
            'company_id'=> 930770000,
            'user_id'=> 012691151-3,
            'adm_aux_id'=> 017387633-5,
            'admec_id'=> 013426315-6,
            'admec_aux_id'=> 016051322-5,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'cod_contract' => '4540002870',
            'description' => ' MA1020035916/30 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE FLOTACIÓN Y RELAVES.',
            'start_date' => '4/27/18 0:00',
            'end_date' => '6/30/21 0:00',
            'endowment' => 30,
            'company_id'=> 761325930,
            'user_id'=> 012691151-3,
            'adm_aux_id'=> 017387633-5,
            'admec_id'=> 014457421-4,
            'admec_aux_id'=> 000000000-0,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('contracts')->insert([
            'cod_contract' => '4540002892',
            'description' => '" MA1020035916/20-40 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO."',
            'start_date' => '4/27/18 0:00',
            'end_date' => '6/30/21 0:00',
            'endowment' => 50,
            'company_id'=> 772762801,
            'user_id'=> 012691151-3,
            'adm_aux_id'=> 017387633-5,
            'admec_id'=> 007367179-5,
            'admec_aux_id'=> 000000000-0,
            'deleted'=> FALSE,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        

    }
}
