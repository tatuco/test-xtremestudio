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
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Informatico',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Garzon',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Auxiliar',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('position_companies')->insert([
            'name' => 'Enfermero',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
