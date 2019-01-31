<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "sysadmin",
            'email' => 'sysadmin@gmail.com',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "operador",
            'email' => 'operador@gmail.com',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

          DB::table('users')->insert([
            'name' => "guest",
            'email' => 'guest@gmail.com',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
