<?php

use Illuminate\Database\Seeder;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file_types')->insert([
            'name' => 'tipo archivo 1',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('file_types')->insert([
            'name' => 'tipo archivo 2',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('file_types')->insert([
            'name' => 'tipo archivo 3',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
