<?php

use Illuminate\Database\Seeder;

class PeopleCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_companies')->insert([
            'people_id' => '24356393',
            'company_id' => '000-000-000',
            'position_id' => '1',
            'contract_id' => '00001',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people_companies')->insert([
            'people_id' => '25916541',
            'company_id' => '000-000-000',
            'position_id' => '2',
            'contract_id' => '00002',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people_companies')->insert([
            'people_id' => '31234897',
            'company_id' => '000-000-000',
            'position_id' => '3',
            'contract_id' => '00003',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people_companies')->insert([
            'people_id' => '23879654',
            'company_id' => '000-000-000',
            'position_id' => '4',
            'contract_id' => '00004',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people_companies')->insert([
            'people_id' => '12536829',
            'company_id' => '000-000-000',
            'position_id' => '5',
            'contract_id' => '00001',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
