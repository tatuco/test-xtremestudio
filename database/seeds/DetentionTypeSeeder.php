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
        DB::table('detentiontypes')->insert([
            'name' => '',
            'description' => '',
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }
}
