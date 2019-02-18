<?php

use Illuminate\Database\Seeder;

class TurnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turns')->insert([
            'description' => '5x2',
            'working_days' => '5',
            'break_days' => '2',
            'shift' => 'diurnal',
            'company_id' => '000-000-000',
            'contract_id' => '00001',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('turns')->insert([
            'description' => '4x3',
            'working_days' => '4',
            'break_days' => '3',
            'shift' => 'diurnal',
            'company_id' => '000-000-000',
            'contract_id' => '00002',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('turns')->insert([
            'description' => '7x7',
            'working_days' => '7',
            'break_days' => '7',
            'shift' => 'diurnal',
            'company_id' => '000-000-000',
            'contract_id' => '00003',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('turns')->insert([
            'description' => '15x15',
            'working_days' => '15',
            'break_days' => '15',
            'shift' => 'diurnal',
            'company_id' => '000-000-000',
            'contract_id' => '00004',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
