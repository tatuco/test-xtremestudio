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
      /*  DB::table('users')->insert([
            'name' => "Carlos Gomez",
            'email' => 'Carlosgomez@mcentinela.cl',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);*/
        DB::table('users')->insert([
            'name' => "Carlos Gomez",
            'email' => 'cgomezgal@mineracentinela.cl',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Admin M-Centinela",
            'email' => 'admin@mcentinela.cl',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Miguel plaza",
            'email' => 'miguel.plaza@plazfer.cl',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

          DB::table('users')->insert([
            'name' => "Ysrael Mendez",
            'email' => 'ysrael.mendez@plazfer.cl',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Sysadmin",
            'email' => 'sysadmin@plazfer.cl',
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
