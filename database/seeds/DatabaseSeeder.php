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
      //   $this->call(ParamSeeder::class);
        $this->call(AccountSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(PermissionSeeder::class);
       //  $this->call(TypeRackSeeder::class);

        /* $this->call(CompanySeeder::class);
         $this->call(PersonSeeder::class);
         $this->call(ContractsSeeder::class);
         $this->call(PositionCompanySeeder::class);
         $this->call(TurnSeeder::class);
         $this->call(RequirementsCompanySeeder::class);
         $this->call(PersonTypeSeeder::class);
         $this->call(RequirementsPeopleSeeder::class);
         $this->call(UserPersonSeeder::class);
         $this->call(ContractPositionSeeder::class);
         $this->call(DetentionTypeSeeder::class);
         $this->call(FileTypeSeeder::class);
         $this->call(EventTypeSeeder::class);
         $this->call(StatusEventSeeder::class);
         $this->call(ClasificationSeeder::class);
      //   $this->call(PeopleCompanySeeder::class);
        // $this->call(AccessSeeder::class);
        // $this->call(AccessDetailsSeeder::class);*/

    }
}
