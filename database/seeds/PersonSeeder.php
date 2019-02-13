<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'id' => '24356393',
            'name' => 'Luis',
            'last_name' => 'Ramirez',
            'date_birth' => '1995-08-23',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Hugo Silva Endeiza 840',
            'email' => 'Prueba@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
