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
            'name' => "Luis Ramirez",
            'email' => 'developer1@plazfer.cl',
            'account_id' => 1,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Laura Chacon",
            'email' => 'developer2@plazfer.cl',
            'account_id' => 1,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Miguel plaza",
            'email' => 'miguel.plaza@plazfer.cl',
            'account_id' => 1,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

          DB::table('users')->insert([
            'name' => "Javier Orellana",
            'email' => 'javier.orellana@plazfer.cl',
            'account_id' => 1,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Sysadmin",
            'email' => 'sysadmin@plazfer.cl',
            'account_id' => 1,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('users')->insert([
            'name' => "Luis",
            'email' => 'luis@test.cl',
            'account_id' => 2,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('users')->insert([
            'name' => "Laura",
            'email' => 'laura@test.cl',
            'account_id' => 2,
            'password' => bcrypt('123456'),
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
