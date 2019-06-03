<?php

use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_types')->insert([
            'name' => 'Pivote',
            'description' => 'Evento Principal de la Detencion.',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('event_types')->insert([
            'name' => 'Critico',
            'description' => 'Evento con gran importancia en la Detencion.',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('event_types')->insert([
            'name' => 'Normal',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
