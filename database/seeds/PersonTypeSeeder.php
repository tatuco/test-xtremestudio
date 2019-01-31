<?php

use Illuminate\Database\Seeder;

class PersonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_types')->insert([
            'name' => 'User',
            'description' => 'Employees of the Company with Income to the system.',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('person_types')->insert([
            'name' => 'Personal',
            'description' => 'Employees of the Company',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
