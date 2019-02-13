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

    }
}
