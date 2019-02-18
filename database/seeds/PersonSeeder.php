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

        DB::table('people')->insert([
            'id' => '23879654',
            'name' => 'Ildemaro',
            'last_name' => 'Ramirez',
            'date_birth' => '1992-08-14',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Hugo Silva',
            'email' => 'ildemaro@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '32123987',
            'name' => 'Junior',
            'last_name' => 'Garcia',
            'date_birth' => '1991-08-11',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Gran Chimu',
            'email' => 'junior@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '34765123',
            'name' => 'Ivan',
            'last_name' => 'Pinzon',
            'date_birth' => '1990-02-23',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Aromas del Inca',
            'email' => 'ivan@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '12536829',
            'name' => 'Raymer',
            'last_name' => 'Teran',
            'date_birth' => '1975-03-13',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Central Brasas',
            'email' => 'raymer@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '25703883',
            'name' => 'Mario',
            'last_name' => 'Gonzalez',
            'date_birth' => '1987-10-29',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Baquedaño 499',
            'email' => 'mario@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '34098612',
            'name' => 'Geronimo',
            'last_name' => 'Nova',
            'date_birth' => '1980-12-31',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Cuzco Centro',
            'email' => 'geronimo@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '12345678',
            'name' => 'Javier',
            'last_name' => 'Mita',
            'date_birth' => '1972-08-06',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Ossa 337',
            'email' => 'javier@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '31234897',
            'name' => 'David',
            'last_name' => 'Tesillo',
            'date_birth' => '1991-09-15',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Latorre 3316',
            'email' => 'david@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '25916541',
            'name' => 'Karim',
            'last_name' => 'Benzema',
            'date_birth' => '1992-11-01',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Santiago Bernabeu',
            'email' => 'karim@hotmail.com',
            'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
