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

    }
}
