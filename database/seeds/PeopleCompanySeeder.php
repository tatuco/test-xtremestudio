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
            'people_id' => '178672495',
            'company_id' => '930770000',
            'position_id' => '1',
            'contract_id' => '4540002894',
            'type_contract' => 'fixet',
            'type_employee' => 'direct',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
