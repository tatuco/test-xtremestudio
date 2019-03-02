<?php

use Illuminate\Database\Seeder;

class RequirementsCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements_company')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'company_id' => '930770000',
            'contract_id' => '4540002894',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('requirements_company')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'company_id' => '930770000',
            'contract_id' => '4540002894',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('requirements_company')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'company_id' => '930770000',
            'contract_id' => '4540002894',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('requirements_company')->insert([
            'description' => 'Se agragaran campos segun cantidad de requisitos',
            'company_id' => '930770000',
            'contract_id' => '4540002894',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
