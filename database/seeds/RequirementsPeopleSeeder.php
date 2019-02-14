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
            'people_id' => '24356393',
            'contract_id' => '00001',
            'company_id' => '000-000-000',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('requirements_people')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'people_id' => '25916541',
            'contract_id' => '00002',
            'company_id' => '000-000-000',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('requirements_people')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'people_id' => '31234897',
            'contract_id' => '00003',
            'company_id' => '000-000-000',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('requirements_people')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'people_id' => '23879654',
            'contract_id' => '00004',
            'company_id' => '000-000-000',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
