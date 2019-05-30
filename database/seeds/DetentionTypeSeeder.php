<?php

use Illuminate\Database\Seeder;

class DetentionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detention_types')->insert([
            'name' => 'Tipo Detencion Test 1',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('detention_types')->insert([
            'name' => 'Tipo Detencion Test 2',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
