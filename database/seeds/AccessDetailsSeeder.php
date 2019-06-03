<?php

use Illuminate\Database\Seeder;

class AccessDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_details')->insert([
            'access_id' => 1,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 2,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 3,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 4,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 5,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 6,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 7,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 8,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 9,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('access_details')->insert([
            'access_id' => 10,
            'type' => 'input',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);


    }
    /**
     * Tipos de evento:
     * normal
     * critico
     * propiedad:
     * pivote
     *
     * fuera de plazo : validar si se esta creando fuera de plazo
     *
     * si la fecha del evento es menor a hoy el evento es fuera de plazo.
     */
}
