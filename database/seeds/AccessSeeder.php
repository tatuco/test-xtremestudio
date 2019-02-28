<?php

use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accesses')->insert([
            'person_id'=> '24356393',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accesses')->insert([
            'person_id'=> '23879654',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accesses')->insert([
            'person_id'=> '34765123',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accesses')->insert([
            'person_id'=> '32123987',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('accesses')->insert([
            'person_id'=> '12536829',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accesses')->insert([
            'person_id'=> '25703883',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('accesses')->insert([
            'person_id'=> '34098612',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accesses')->insert([
            'person_id'=> '12345678',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('accesses')->insert([
            'person_id'=> '31234897',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accesses')->insert([
            'person_id'=> '25916541',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
