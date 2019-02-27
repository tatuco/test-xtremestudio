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
         $this->call(CompanySeeder::class);
         $this->call(ContractsSeeder::class);
         $this->call(PositionCompanySeeder::class);
         $this->call(TurnSeeder::class);
         $this->call(RequirementsCompanySeeder::class);
         $this->call(PersonTypeSeeder::class);
         $this->call(PersonSeeder::class);
         $this->call(RequirementsPeopleSeeder::class);
         $this->call(UserPersonSeeder::class);        
         $this->call(PeopleCompanySeeder::class);

    }
}
