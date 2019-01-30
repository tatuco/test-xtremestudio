<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ParamSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(PermissionSeeder::class);
    }
}
