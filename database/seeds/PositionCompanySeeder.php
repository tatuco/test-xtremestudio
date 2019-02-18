<?php

use Illuminate\Database\Seeder;

class PositionCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position_companies')->insert([
            'name' => 'Mecanico',
            'company_id' => '000-000-000',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Informatico',
            'company_id' => '000-000-000',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Garzon',
            'company_id' => '000-000-000',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Auxiliar',
            'company_id' => '000-000-000',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Enfermero',
            'company_id' => '000-000-000',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
