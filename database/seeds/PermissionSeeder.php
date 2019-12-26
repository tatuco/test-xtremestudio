<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name'=> 'index users',
            'slug'=>'index.users',
            'account_id' => 1,
            'description' => 'list users',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permission_role')->insert([
            'permission_id'=> 1,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update user',
            'slug'=>'update.users',
            'account_id' => 1,
            'description' => 'update user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permission_role')->insert([
            'permission_id'=> 2,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show user',
            'account_id' => 1,
            'slug'=>'show.users',
            'description' => 'show user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permission_role')->insert([
            'permission_id'=> 3,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete user',
            'slug'=>'delete.users',
            'account_id' => 1,
            'description' => 'delete user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

          DB::table('permissions')->insert([
            'name'=> 'backup bd',
            'slug'=>'run.backup',
              'account_id' => 1,
            'description' => 'runing backup database',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

           DB::table('permission_role')->insert([
            'permission_id'=> 5,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permission_role')->insert([
            'permission_id'=> 4,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
