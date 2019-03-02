<?php

use Illuminate\Database\Seeder;

class RequirementsPeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements_people')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'people_id' => '178672495',
            'company_id' => '930770000',
            'contract_id' => '4540002894',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
