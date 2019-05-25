<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIdRutEmployeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /*   DB::connection()->getPdo()->exec("alter table contracts drop foreign key contracts_adm_aux_id_foreign;");
        DB::connection()->getPdo()->exec("alter table contracts drop foreign key contracts_admec_aux_id_foreign;");
        DB::connection()->getPdo()->exec("alter table contracts drop foreign key contracts_admec_id_foreign;");
        DB::connection()->getPdo()->exec("alter table contracts drop foreign key contracts_user_id_foreign;");
        DB::connection()->getPdo()->exec("alter table employes drop foreign key people_companies_people_id_foreign;");
        DB::connection()->getPdo()->exec("alter table person_user drop foreign key person_user_person_id_foreign;");
        DB::connection()->getPdo()->exec("alter table requirements_people drop foreign key requirements_people_people_id_foreign;");

        DB::connection()->getPdo()->exec("alter table contracts modify user_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table contracts modify adm_aux_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table contracts modify admec_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table contracts modify admec_aux_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table employes modify people_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table person_user modify person_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table requirements_people modify people_id int(25) not null;");
        DB::connection()->getPdo()->exec("alter table people modify id int(25) not null;");

        DB::connection()->getPdo()->exec("ALTER TABLE contracts ADD CONSTRAINT `contracts_adm_aux_id_foreign` FOREIGN KEY (`adm_aux_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
        DB::connection()->getPdo()->exec("ALTER TABLE contracts ADD CONSTRAINT `contracts_admec_aux_id_foreign` FOREIGN KEY (`admec_aux_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
        DB::connection()->getPdo()->exec("ALTER TABLE contracts ADD CONSTRAINT `contracts_admec_id_foreign` FOREIGN KEY (`admec_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
        DB::connection()->getPdo()->exec("ALTER TABLE contracts ADD CONSTRAINT `contracts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
        DB::connection()->getPdo()->exec("ALTER TABLE employes ADD CONSTRAINT `people_companies_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
        DB::connection()->getPdo()->exec("ALTER TABLE person_user ADD CONSTRAINT `person_user_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
        DB::connection()->getPdo()->exec("ALTER TABLE requirements_people ADD CONSTRAINT `requirements_people_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;");
            */
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
