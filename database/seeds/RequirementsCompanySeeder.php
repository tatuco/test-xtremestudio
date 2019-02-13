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
            'contract_id' => '00001',
            'company_id' => '000-000-000',
            'check' => 'active',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
