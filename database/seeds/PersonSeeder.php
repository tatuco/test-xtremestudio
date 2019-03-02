<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'id' => '24356393',
            'name' => 'Luis',
            'last_name_p' => 'Ramirez',
            'last_name_m' => 'Ramirez',
            'date_birth' => '1995-08-23',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Hugo Silva Endeiza 840',
            'email' => 'Prueba@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '23879654',
            'name' => 'Ildemaro',
            'last_name_p' => 'Ramirez',
            'last_name_m' => 'Ramirez',
            'date_birth' => '1992-08-14',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Hugo Silva',
            'email' => 'ildemaro@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '32123987',
            'name' => 'Junior',
            'last_name_p' => 'Garcia',
            'last_name_m' => 'Garcia',
            'date_birth' => '1991-08-11',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Gran Chimu',
            'email' => 'junior@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '34765123',
            'name' => 'Ivan',
            'last_name_p' => 'Pinzon',
            'last_name_m' => 'Pinzon',
            'date_birth' => '1990-02-23',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Aromas del Inca',
            'email' => 'ivan@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '12536829',
            'name' => 'Raymer',
            'last_name_p' => 'Teran',
            'last_name_m' => 'Teran',
            'date_birth' => '1975-03-13',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Central Brasas',
            'email' => 'raymer@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '25703883',
            'name' => 'Mario',
            'last_name_p' => 'Gonzalez',
            'last_name_m' => 'Gonzalez',
            'date_birth' => '1987-10-29',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Baquedaño 499',
            'email' => 'mario@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '34098612',
            'name' => 'Geronimo',
            'last_name_p' => 'Nova',
            'last_name_m' => 'Nova',
            'date_birth' => '1980-12-31',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Cuzco Centro',
            'email' => 'geronimo@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '12345678',
            'name' => 'Javier',
            'last_name_p' => 'Mita',
            'last_name_m' => 'Mita',
            'date_birth' => '1972-08-06',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Ossa 337',
            'email' => 'javier@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '31234897',
            'name' => 'David',
            'last_name_p' => 'Tesillo',
            'last_name_m' => 'Tesillo',
            'date_birth' => '1991-09-15',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Latorre 3316',
            'email' => 'david@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('people')->insert([
            'id' => '25916541',
            'name' => 'Karim',
            'last_name_p' => 'Benzema',
            'last_name_m' => 'Benzema',
            'date_birth' => '1992-11-01',
            'civil_status' => 'single',
            'sex' => 'male',
            'address' => 'Santiago Bernabeu',
            'email' => 'karim@hotmail.com',
            //'type_person_id' => 1,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    //NEW ******************************************************
        DB::table('people')->insert([
        'id' => '178672495',
        'name' => 'Miguel Antonio ',
        'last_name_p' => 'Panozo ',
        'last_name_m' => 'Toro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162585770',
        'name' => 'Rodrigo Alejandro ',
        'last_name_p' => 'Becerra',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015695277K',
        'name' => 'Hernan',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127007594',
        'name' => 'Adrian',
        'last_name_p' => 'Barrientos ',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167037380',
        'name' => 'Christian',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Pallero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154675825',
        'name' => 'Javier',
        'last_name_p' => 'Bustos',
        'last_name_m' => 'Moreira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129444657',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90535455',
        'name' => 'Jorge',
        'last_name_p' => 'Umazabal',
        'last_name_m' => 'Meza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180097023',
        'name' => 'Carlos',
        'last_name_p' => 'Zepeda',
        'last_name_m' => 'Cisternas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112971882',
        'name' => 'Mario',
        'last_name_p' => 'Miranda',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179803534',
        'name' => 'Maykol',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146065724',
        'name' => 'NATALIA SOLEDAD',
        'last_name_p' => 'NUÑEZ',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160555785',
        'name' => 'Oscar',
        'last_name_p' => 'Palacios',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167122361',
        'name' => 'DANIELA ',
        'last_name_p' => 'LABRA',
        'last_name_m' => 'CORTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129392924',
        'name' => 'Hector',
        'last_name_p' => 'Yaite',
        'last_name_m' => 'Huerta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179372665',
        'name' => 'Geraldine',
        'last_name_p' => 'Lazo',
        'last_name_m' => 'Mandiola',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017067832K',
        'name' => 'Yazmin',
        'last_name_p' => 'Cerna',
        'last_name_m' => 'Saez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176687983',
        'name' => 'Fernando Antonio',
        'last_name_p' => 'Cea',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101883981',
        'name' => 'GABRIEL',
        'last_name_p' => 'PULGAR',
        'last_name_m' => 'CORROTEA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157696106',
        'name' => 'ANDRES ABEL ',
        'last_name_p' => 'LOPEZ',
        'last_name_m' => 'AYAVIRE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175524029',
        'name' => 'ELISEO JUVENAL',
        'last_name_p' => 'REYES ',
        'last_name_m' => 'CHOQUE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139295099',
        'name' => 'Boris Ernesto',
        'last_name_p' => 'Lara ',
        'last_name_m' => 'Zedan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177122343',
        'name' => 'Cesar Alexis',
        'last_name_p' => 'Adaros',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177113166',
        'name' => 'Juan',
        'last_name_p' => 'Veliz',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150165032',
        'name' => 'Victor',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Barraza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170941829',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Pinto',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90408003',
        'name' => 'FERNANDO ',
        'last_name_p' => 'FARIAS ',
        'last_name_m' => 'RODRIGUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172010512',
        'name' => 'Jonathan',
        'last_name_p' => 'Gutierrez',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159178315',
        'name' => 'Nibaldo',
        'last_name_p' => 'Montoya',
        'last_name_m' => 'Montoya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155524073',
        'name' => 'francisco javier',
        'last_name_p' => 'hidalgo',
        'last_name_m' => 'esparza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117268608',
        'name' => 'Leonardo',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '240846764',
        'name' => 'Modesto',
        'last_name_p' => 'Merino',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93961595',
        'name' => 'Hugo',
        'last_name_p' => 'Urrutia',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188264034',
        'name' => 'EDUARDO',
        'last_name_p' => 'BOGGIONI',
        'last_name_m' => 'CASTILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '006992266K',
        'name' => 'Nestor',
        'last_name_p' => 'Choquevillca',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176558717',
        'name' => 'Daniel ',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Lazo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112595236',
        'name' => 'Juan',
        'last_name_p' => 'Huanca ',
        'last_name_m' => 'Delgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163000040',
        'name' => 'Ronal Alexis',
        'last_name_p' => 'Orellana',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '026214643K',
        'name' => 'ARTURO JOSE',
        'last_name_p' => 'NUÑEZ ',
        'last_name_m' => 'SOLER',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224254431',
        'name' => 'LUIS ALBERTO',
        'last_name_p' => 'CONDORI',
        'last_name_m' => 'YAMARICO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123480082',
        'name' => 'VICTOR HUGO',
        'last_name_p' => 'PEREDO',
        'last_name_m' => 'ARTEAGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139558537',
        'name' => 'Pedro Esteban',
        'last_name_p' => 'Munoz',
        'last_name_m' => 'Venegas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150509327',
        'name' => 'Raul',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Chirino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '192054311',
        'name' => 'JEANKEAR',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'RIQUELME',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170760956',
        'name' => 'PATRICIO',
        'last_name_p' => 'ROMERO',
        'last_name_m' => 'GARCIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140666440',
        'name' => 'Isaías Alexis',
        'last_name_p' => 'Salgado',
        'last_name_m' => 'Sáez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144432908',
        'name' => 'Rodolfo Antonio',
        'last_name_p' => 'Pena',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120142054',
        'name' => 'Omar',
        'last_name_p' => 'Cespedes',
        'last_name_m' => 'Zuñiga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154376801',
        'name' => 'MIGUEL',
        'last_name_p' => 'ARAVENA',
        'last_name_m' => 'CONTRERAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132200440',
        'name' => 'ISMAEL NORBERTO',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'AGUILAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136325760',
        'name' => 'CRISTIAN PATRICIO',
        'last_name_p' => 'ARAYA',
        'last_name_m' => 'ARDILES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121315351',
        'name' => 'Alain',
        'last_name_p' => 'Ulloa',
        'last_name_m' => 'Roman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119309018',
        'name' => 'Roberto',
        'last_name_p' => 'Godoy',
        'last_name_m' => 'Trigo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150511860',
        'name' => 'carlos',
        'last_name_p' => 'diaz ',
        'last_name_m' => 'castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93999215',
        'name' => 'Cristian',
        'last_name_p' => 'Urizar',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125850049',
        'name' => 'Mauricio',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Acebedo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128053948',
        'name' => 'Jose ',
        'last_name_p' => 'Villalobos ',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146973485',
        'name' => 'Sergio',
        'last_name_p' => 'Lopez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011902482K',
        'name' => 'Julio Alberto',
        'last_name_p' => 'Cruces',
        'last_name_m' => 'Ravello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150160952',
        'name' => 'Wladimir',
        'last_name_p' => 'Fajardo',
        'last_name_m' => 'Cruz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '214372525',
        'name' => 'WLADIMIR',
        'last_name_p' => 'TORREZ',
        'last_name_m' => 'CHAMBI',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136336347',
        'name' => 'Francisco ',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010028233K',
        'name' => 'JORGE',
        'last_name_p' => 'CAMUS',
        'last_name_m' => 'AMPUERO ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162856022',
        'name' => 'SAMUEL',
        'last_name_p' => 'PEREIRA',
        'last_name_m' => 'MALDONADO ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '236908259',
        'name' => 'Pablo',
        'last_name_p' => 'Jordan',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172461344',
        'name' => 'DANIELA',
        'last_name_p' => 'MELLA',
        'last_name_m' => 'MEDRANO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126144024',
        'name' => 'Franco Marcelo',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Peredo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182559997',
        'name' => 'DASMARI',
        'last_name_p' => 'MARCHANT',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183629646',
        'name' => 'NAIDA OLIVIA',
        'last_name_p' => 'VILLARROEL',
        'last_name_m' => 'ANTIQUERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141111876',
        'name' => 'Karen',
        'last_name_p' => 'Alarcon',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92938174',
        'name' => 'Juan ',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171324602',
        'name' => 'Pablo Francisco',
        'last_name_p' => 'San Juan',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126153090',
        'name' => 'Marcelo Alejandro',
        'last_name_p' => 'Moya',
        'last_name_m' => 'Olmos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136434020',
        'name' => 'Alejandro',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163508486',
        'name' => 'Claudio Guillermo',
        'last_name_p' => 'Gutierrez',
        'last_name_m' => 'Cotrtes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124896886',
        'name' => 'JOSE MANUEL',
        'last_name_p' => 'MORALES',
        'last_name_m' => 'MUENA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144351827',
        'name' => 'Cristian',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184828952',
        'name' => 'Francisco',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130156339',
        'name' => 'Javier',
        'last_name_p' => 'Ortega',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118296478',
        'name' => 'DANTE ALGUERI',
        'last_name_p' => 'DIAZ',
        'last_name_m' => 'JARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107084002',
        'name' => 'Gerardo Alfonso',
        'last_name_p' => 'Reiman',
        'last_name_m' => 'Liencheo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128272429',
        'name' => 'JORGE ALEJANDRO',
        'last_name_p' => 'VERA',
        'last_name_m' => 'FARIAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146286178',
        'name' => 'VICTOR',
        'last_name_p' => 'NUÑEZ',
        'last_name_m' => 'NUÑEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157409174',
        'name' => 'JUAN ',
        'last_name_p' => 'ORTEGA',
        'last_name_m' => 'PEREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106789800',
        'name' => 'LUIS',
        'last_name_p' => 'VERA',
        'last_name_m' => 'RAMOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128071660',
        'name' => 'ALEXIS',
        'last_name_p' => 'LILLO',
        'last_name_m' => 'ROJAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '263833090',
        'name' => 'PABLO',
        'last_name_p' => 'PINEDA',
        'last_name_m' => 'REYES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143083810',
        'name' => 'Sergio Karim ',
        'last_name_p' => 'Ramirez ',
        'last_name_m' => 'Levill',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016565322K',
        'name' => 'Jaime Francisco',
        'last_name_p' => 'Mondaca',
        'last_name_m' => 'Mora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150176425',
        'name' => 'JUAN CARLOS ',
        'last_name_p' => 'AYAVIRE',
        'last_name_m' => 'ARACENA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150142458',
        'name' => 'Alex',
        'last_name_p' => 'Aramayo',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125751059',
        'name' => 'Osvaldo Medaro',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179748312',
        'name' => 'Paolo Antonio',
        'last_name_p' => 'Carrasco',
        'last_name_m' => 'Jeria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174303029',
        'name' => 'AXEL',
        'last_name_p' => 'ROZAS',
        'last_name_m' => 'HERRERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159477630',
        'name' => 'Andres Alejandro',
        'last_name_p' => 'Aguilera ',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109891509',
        'name' => 'Alvaro Manuel',
        'last_name_p' => 'Bahamondes',
        'last_name_m' => 'Caiconte',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138627632',
        'name' => 'Antonio',
        'last_name_p' => 'Villegas',
        'last_name_m' => 'Saez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79584924',
        'name' => 'Raul Armando',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173683332',
        'name' => 'ANDRES MARIO',
        'last_name_p' => 'ALVARADO',
        'last_name_m' => 'MAMANI',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138699609',
        'name' => 'Juan ',
        'last_name_p' => 'Prudant',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018825988K',
        'name' => 'Rodrigo',
        'last_name_p' => 'Serrano',
        'last_name_m' => 'Cordova',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166142644',
        'name' => 'Juan Alejandro',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Segovia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179371634',
        'name' => 'Luis',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Tebes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150076730',
        'name' => 'CLAUDIA ',
        'last_name_p' => 'PEÑALOZA',
        'last_name_m' => 'CAHUANA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125939775',
        'name' => 'Andres ',
        'last_name_p' => 'Saldia',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84769436',
        'name' => 'IVAN ARNOLDO',
        'last_name_p' => 'DIAZ',
        'last_name_m' => 'CONEJEROS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179737388',
        'name' => 'Jesus',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Quispe',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '245765762',
        'name' => 'ADALBERTO',
        'last_name_p' => 'TORREZ',
        'last_name_m' => 'SEÑA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '202744443',
        'name' => 'JOSE',
        'last_name_p' => 'MUÑOZ',
        'last_name_m' => 'LAZO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017554710K',
        'name' => 'RENATA',
        'last_name_p' => 'SAN ROMAN',
        'last_name_m' => 'GONZALEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013420043K',
        'name' => 'JORGE LUIS',
        'last_name_p' => 'ILIJIC',
        'last_name_m' => 'POBLETE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '103804957',
        'name' => 'Alois Cristhian',
        'last_name_p' => 'Pollinger',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167126561',
        'name' => 'GABRIELA',
        'last_name_p' => 'MAMANI',
        'last_name_m' => 'MAMANI',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131638000',
        'name' => 'JUAN ALEJANDRO',
        'last_name_p' => 'ARRIAGADA',
        'last_name_m' => 'BASTIDAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150153069',
        'name' => 'SERGIO ',
        'last_name_p' => 'MONJE ',
        'last_name_m' => 'MOLINA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158023407',
        'name' => 'ABEL VLADIMIR',
        'last_name_p' => 'RODRIGUEZ ',
        'last_name_m' => 'MALEBRAN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144859898',
        'name' => 'Eduardo',
        'last_name_p' => 'Lara',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167219039',
        'name' => 'JUAN CARLOS',
        'last_name_p' => 'CARDEMIL',
        'last_name_m' => 'ARCOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165760514',
        'name' => 'David',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Palavicino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150202140',
        'name' => 'Eduardo Fabian',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012603346K',
        'name' => 'Saúl ',
        'last_name_p' => 'Ledesma ',
        'last_name_m' => 'Almonacid',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '237727126',
        'name' => 'Luis',
        'last_name_p' => 'Luango',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191813766',
        'name' => 'Pablo',
        'last_name_p' => 'Rojo',
        'last_name_m' => '-',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '70885182',
        'name' => 'Juan',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Suazo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138706982',
        'name' => 'Luis',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Feliu',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011817710K',
        'name' => 'Jose Alfredo',
        'last_name_p' => 'Pastenes ',
        'last_name_m' => 'Valdes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187925304',
        'name' => 'Nicolas Ignacio',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Gatica',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013024923K',
        'name' => 'Alejandro',
        'last_name_p' => 'Zamora',
        'last_name_m' => 'Benitez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81490376',
        'name' => 'Victor ',
        'last_name_p' => 'Cortes',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134135441',
        'name' => 'Roberto',
        'last_name_p' => 'Montecinos',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126110391',
        'name' => 'ABEL',
        'last_name_p' => 'AVALOS',
        'last_name_m' => 'ZEPEDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167033415',
        'name' => 'Sergio Andres',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138801381',
        'name' => 'Alvaro',
        'last_name_p' => 'Villaseca',
        'last_name_m' => 'Cisterna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117790592',
        'name' => 'Wilfredo',
        'last_name_p' => 'Bastias',
        'last_name_m' => 'Hermosilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181491566',
        'name' => 'Victor',
        'last_name_p' => 'Mora',
        'last_name_m' => 'Palavicino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164661539',
        'name' => 'Wilson Alexis',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Marin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129944765',
        'name' => 'Cristian',
        'last_name_p' => 'Navarro',
        'last_name_m' => 'Ampuero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134712171',
        'name' => 'Felipe',
        'last_name_p' => 'Rios',
        'last_name_m' => 'Marin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '67351924',
        'name' => 'Eduardo  ',
        'last_name_p' => 'Gomez ',
        'last_name_m' => 'Suarez  ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120591150',
        'name' => 'William Leonel',
        'last_name_p' => 'Leiva',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015012025K',
        'name' => 'Guillermo ',
        'last_name_p' => 'Espejo ',
        'last_name_m' => 'Pallero ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104093744',
        'name' => 'Ricardo',
        'last_name_p' => 'Morgado',
        'last_name_m' => 'Morgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114686468',
        'name' => 'Patricio',
        'last_name_p' => 'Bugueño',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181245271',
        'name' => 'sebastian',
        'last_name_p' => 'bustos',
        'last_name_m' => 'toro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159759644',
        'name' => 'Claudio',
        'last_name_p' => 'Cepeda',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '019104097K',
        'name' => 'Diego',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Araos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '199524828',
        'name' => 'Matias',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Gatica',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126112386',
        'name' => 'Christian',
        'last_name_p' => 'Ayala',
        'last_name_m' => 'Olguin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013010455K',
        'name' => 'Rodrigo',
        'last_name_p' => 'Campillay',
        'last_name_m' => 'Astorga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131765460',
        'name' => 'Luis',
        'last_name_p' => 'Trigo',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124418313',
        'name' => 'Edison',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Olavarria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187918596',
        'name' => 'Cesar ',
        'last_name_p' => 'Ferrer',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168749384',
        'name' => 'Jose',
        'last_name_p' => 'Joglar',
        'last_name_m' => 'Riveros',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155192712',
        'name' => 'DAMO',
        'last_name_p' => 'BENITEZ',
        'last_name_m' => 'VERGARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190989836',
        'name' => 'Darién',
        'last_name_p' => 'Araya',
        'last_name_m' => 'López',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113832258',
        'name' => 'Eduardo',
        'last_name_p' => 'Santander',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165496280',
        'name' => 'Ingrid Alejandra',
        'last_name_p' => 'Ledesma',
        'last_name_m' => 'Aguilera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109897078',
        'name' => 'Karina Mabel ',
        'last_name_p' => 'Vega ',
        'last_name_m' => 'Lobera ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165654331',
        'name' => 'Nataly',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Mancilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168482582',
        'name' => 'Francy ',
        'last_name_p' => 'Adaos',
        'last_name_m' => 'Avalos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156807222',
        'name' => 'RICARDO',
        'last_name_p' => 'CASTILLO',
        'last_name_m' => 'CIFUENTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178657070',
        'name' => 'Yilbert',
        'last_name_p' => 'Gahona',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170182219',
        'name' => 'Alexander Marcelo',
        'last_name_p' => 'Baricich',
        'last_name_m' => 'Salas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144574214',
        'name' => 'Ruben Jaime',
        'last_name_p' => 'Santa Cruz',
        'last_name_m' => 'Cabezas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124415594',
        'name' => 'Marco',
        'last_name_p' => 'Meza',
        'last_name_m' => 'Antunez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016672984K',
        'name' => 'Marco',
        'last_name_p' => 'Azocar',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170131215',
        'name' => 'Eugenio',
        'last_name_p' => 'Cataldo',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185074218',
        'name' => 'Camila Fernanda',
        'last_name_p' => 'Morgado',
        'last_name_m' => 'Ruiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178978845',
        'name' => 'Felipe ',
        'last_name_p' => 'Figueroa',
        'last_name_m' => 'San Martín ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182391425',
        'name' => 'Susana',
        'last_name_p' => 'Bracho',
        'last_name_m' => 'Rosas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185181596',
        'name' => 'Claudia Francisca',
        'last_name_p' => 'Pallero',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131734476',
        'name' => 'Carlos',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174366020',
        'name' => 'Joselyn',
        'last_name_p' => 'Quispe',
        'last_name_m' => 'Arenas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169269157',
        'name' => 'FERNANDO',
        'last_name_p' => 'TAPIA',
        'last_name_m' => '-',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162343696',
        'name' => 'Jesus',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Puentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170968808',
        'name' => 'Carlos Francisco',
        'last_name_p' => 'Saa',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187934265',
        'name' => 'Agustin',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Navea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112195335',
        'name' => 'RAUL',
        'last_name_p' => 'RIVADENEIRA',
        'last_name_m' => 'CONTRERAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132249431',
        'name' => 'Rodrigo Alexis',
        'last_name_p' => 'Jorquera',
        'last_name_m' => 'Lamas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124261643',
        'name' => 'Francisco Fabian',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Araos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170709195',
        'name' => 'Gabriel',
        'last_name_p' => 'Gacitua',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150324793',
        'name' => 'Oscar Alejandro',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Condori',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155145153',
        'name' => 'Andrés Antonio',
        'last_name_p' => 'Avalos',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124247977',
        'name' => 'Hector Vladimir',
        'last_name_p' => 'Antiquera',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139905598',
        'name' => 'Hector ',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162427989',
        'name' => 'Dany',
        'last_name_p' => 'Prieto',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84736910',
        'name' => 'Walter',
        'last_name_p' => 'Marin',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185646890',
        'name' => 'Andres Zacarias',
        'last_name_p' => 'Guajardo',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120789104',
        'name' => 'Sergio',
        'last_name_p' => 'Molina',
        'last_name_m' => 'Alarcon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008237986K',
        'name' => 'Ramon Antonio',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188541186',
        'name' => 'Danilo Andres',
        'last_name_p' => 'Iturrieta ',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180041710',
        'name' => 'Daniel',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Moya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114735779',
        'name' => 'Pablo',
        'last_name_p' => 'Tolosa',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115795031',
        'name' => 'Luis',
        'last_name_p' => 'Pardo',
        'last_name_m' => 'Matamala',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '226244239',
        'name' => 'Raul Fernando',
        'last_name_p' => 'Liendro',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156908533',
        'name' => 'Cristian Andres',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168147368',
        'name' => 'Cristofer',
        'last_name_p' => 'Basaez',
        'last_name_m' => 'Donoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183532162',
        'name' => 'Francisco Alexander',
        'last_name_p' => 'Alquinta',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '85581511',
        'name' => 'Mauricio',
        'last_name_p' => 'Aqueas',
        'last_name_m' => 'Carvallo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187914760',
        'name' => 'Kirsten Alastair ',
        'last_name_p' => 'Sommerville ',
        'last_name_m' => 'Espoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159098591',
        'name' => 'Alfonso',
        'last_name_p' => 'Honores',
        'last_name_m' => 'Moreno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145476569',
        'name' => 'Claudio',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Varela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157856006',
        'name' => 'Boris',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Aguilera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82098275',
        'name' => 'AUGUSTO JULIO CESAR',
        'last_name_p' => 'GARRIDO',
        'last_name_m' => 'VENEGAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126832370',
        'name' => 'María Del Carmen',
        'last_name_p' => 'Palominos',
        'last_name_m' => 'Palma',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150341574',
        'name' => 'Javier Yamir',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Alcayaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170114035',
        'name' => 'Daniel',
        'last_name_p' => 'Gamboa',
        'last_name_m' => 'Madrid',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141124978',
        'name' => 'Claudia',
        'last_name_p' => 'Chancay',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174365628',
        'name' => 'Alejandra',
        'last_name_p' => 'Gallardo',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151239048',
        'name' => 'Jaime Andres',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141132083',
        'name' => 'Cristian',
        'last_name_p' => 'Toro',
        'last_name_m' => 'Zambrano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144980174',
        'name' => 'Crtistian',
        'last_name_p' => 'Apaz',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124260604',
        'name' => 'Edwin',
        'last_name_p' => 'Matta',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173682905',
        'name' => 'MARIA',
        'last_name_p' => 'DE LA VEGA',
        'last_name_m' => 'JIMENEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136503693',
        'name' => 'JORGE',
        'last_name_p' => 'SIERRA',
        'last_name_m' => 'BERENGUELA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73490758',
        'name' => 'GONZALO',
        'last_name_p' => 'CERDA',
        'last_name_m' => 'VARELA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75648960',
        'name' => 'Carlos Enrique',
        'last_name_p' => 'Fuentes',
        'last_name_m' => 'Ibacache ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158525666',
        'name' => 'Fabian ',
        'last_name_p' => 'Caceres',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181826975',
        'name' => 'JENNIFER ELIZABETH',
        'last_name_p' => 'ACOSTA ',
        'last_name_m' => 'OLIVARES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176412747',
        'name' => 'PABLO SIMON',
        'last_name_p' => 'CRUZ',
        'last_name_m' => 'CRUZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100382261',
        'name' => 'Jorge David',
        'last_name_p' => 'Ortega ',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '006547302K',
        'name' => 'Julio Ernesto ',
        'last_name_p' => 'Cisternas',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131049722',
        'name' => 'Juan Alejandro',
        'last_name_p' => 'Hermosilla',
        'last_name_m' => 'Araneda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137953331',
        'name' => 'Ramon',
        'last_name_p' => 'Pinilla',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130465803',
        'name' => 'Pablo',
        'last_name_p' => 'Ortiz',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165954432',
        'name' => 'Luis Alfredo',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116168766',
        'name' => 'Tomas',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173735944',
        'name' => 'Javier',
        'last_name_p' => 'Ulloa',
        'last_name_m' => 'Garrido',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161338990',
        'name' => 'Miguel',
        'last_name_p' => 'Nievas',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150479118',
        'name' => 'Raul Enrique',
        'last_name_p' => 'Espejo',
        'last_name_m' => 'Aguilera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141128892',
        'name' => 'Jorge Antonio',
        'last_name_p' => 'Romo ',
        'last_name_m' => 'Suarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159829200',
        'name' => 'Cristian',
        'last_name_p' => 'Ramos',
        'last_name_m' => 'Zenteno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146004377',
        'name' => 'RODOLFO ',
        'last_name_p' => 'BAUTISTA',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '240197677',
        'name' => 'JHON FREDY',
        'last_name_p' => 'ABADIA',
        'last_name_m' => 'SAAVEDRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119309220',
        'name' => 'Luis',
        'last_name_p' => 'Moreira',
        'last_name_m' => 'Galleguillos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161360880',
        'name' => 'Carlos Segundo ',
        'last_name_p' => 'Sancho ',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115209477',
        'name' => 'Luis',
        'last_name_p' => 'Cabrera',
        'last_name_m' => 'Fuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '219877587',
        'name' => 'Jorge',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134350032',
        'name' => 'Gustavo',
        'last_name_p' => 'Aravena',
        'last_name_m' => 'Letelier',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162725807',
        'name' => 'Mauricio',
        'last_name_p' => 'Basaure',
        'last_name_m' => 'Beserra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124414083',
        'name' => 'Oscar Alejandro',
        'last_name_p' => 'Chang',
        'last_name_m' => 'Jeraldo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82727302',
        'name' => 'Manuel Fernando',
        'last_name_p' => 'Mondaca',
        'last_name_m' => 'Ossandon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98386130',
        'name' => 'Willy',
        'last_name_p' => 'Jofre',
        'last_name_m' => 'Veas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136360140',
        'name' => 'Michel',
        'last_name_p' => 'Maltrain',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154201335',
        'name' => 'German Arturo',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Delgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143999556',
        'name' => 'Christian',
        'last_name_p' => 'Silva',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157686410',
        'name' => 'Cristian Genaro',
        'last_name_p' => 'Elgueda',
        'last_name_m' => 'Mamani',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139755030',
        'name' => 'jonathan',
        'last_name_p' => 'lara',
        'last_name_m' => 'julio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165596803',
        'name' => 'Sebastian Vicente',
        'last_name_p' => 'Carmona',
        'last_name_m' => 'Orquera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137474425',
        'name' => 'JUAN ALBERTO',
        'last_name_p' => 'VEGA',
        'last_name_m' => 'ARAYA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016578992K',
        'name' => 'Fabian',
        'last_name_p' => 'Medalla',
        'last_name_m' => 'Godoy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133279067',
        'name' => 'Leonardo ',
        'last_name_p' => 'Jeria',
        'last_name_m' => 'Castro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164685969',
        'name' => 'Leandro',
        'last_name_p' => 'Zamora',
        'last_name_m' => 'Jabre',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164371980',
        'name' => 'Christan',
        'last_name_p' => 'Fuentes',
        'last_name_m' => 'Varas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171148960',
        'name' => 'Alberto',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138052001',
        'name' => 'PABLO',
        'last_name_p' => 'PAREDES',
        'last_name_m' => 'FUENTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168684932',
        'name' => 'Rodolfo Valentino',
        'last_name_p' => 'Gomez',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165739892',
        'name' => 'David Reinaldo',
        'last_name_p' => 'Montecinos',
        'last_name_m' => 'Hernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161569275',
        'name' => 'Jonathan',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Belmar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181828641',
        'name' => 'MELISA',
        'last_name_p' => 'GUTIERREZ',
        'last_name_m' => 'ROJAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132159564',
        'name' => 'LUIS OMAR',
        'last_name_p' => 'ARAYA',
        'last_name_m' => 'POZO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109715115',
        'name' => 'CARLOS',
        'last_name_p' => 'CONTRERA',
        'last_name_m' => 'OLMEDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137604345',
        'name' => 'Braulio',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Collarte',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135325074',
        'name' => 'Eduardo',
        'last_name_p' => 'Veas',
        'last_name_m' => 'Juarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130099815',
        'name' => 'Cristian',
        'last_name_p' => 'Gomez',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137271788',
        'name' => 'Gabriel',
        'last_name_p' => 'Mardones',
        'last_name_m' => 'Nova',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011291983K',
        'name' => 'Orlando Ivan',
        'last_name_p' => 'Inostroza',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134175915',
        'name' => 'IVAN',
        'last_name_p' => 'TAIPE',
        'last_name_m' => 'RAMIREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73867495',
        'name' => 'Sergio Roberto',
        'last_name_p' => 'Painevilo',
        'last_name_m' => 'Mancilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '87316971',
        'name' => 'Carlos',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118150848',
        'name' => 'CRISTIAN ',
        'last_name_p' => 'AHUMADA',
        'last_name_m' => 'ALFARO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150052408',
        'name' => 'Juan',
        'last_name_p' => 'Oyanadel',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187901839',
        'name' => 'Marcelo Andres',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Leon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125527779',
        'name' => 'FELINDO',
        'last_name_p' => 'CARTES',
        'last_name_m' => 'PEREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '023694428K',
        'name' => 'EDUARDO',
        'last_name_p' => 'MOREIRA',
        'last_name_m' => 'PARRALES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150134617',
        'name' => 'JONATHAN',
        'last_name_p' => 'davalos',
        'last_name_m' => 'CASTRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188258069',
        'name' => 'Italo',
        'last_name_p' => 'Marin',
        'last_name_m' => 'Veneciano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010757459K',
        'name' => 'CEFERINO DEL CARMEN',
        'last_name_p' => 'SOLIS',
        'last_name_m' => 'POBLETE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140982423',
        'name' => 'CRISTIAN ANDRES',
        'last_name_p' => 'VELIZ',
        'last_name_m' => 'ARAYA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136331981',
        'name' => 'Enrique Ademar Armando',
        'last_name_p' => 'Soto',
        'last_name_m' => 'Toro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '255253816',
        'name' => 'Jefferson',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Zenteno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '186880188',
        'name' => 'Orlando',
        'last_name_p' => 'Alfaro',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '57536292',
        'name' => 'Adolfo Hernán',
        'last_name_p' => 'Márquez',
        'last_name_m' => 'Vera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179747251',
        'name' => 'Joan Joseph',
        'last_name_p' => 'Bolados',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142281104',
        'name' => 'OSCAR',
        'last_name_p' => 'AGUILA',
        'last_name_m' => 'CARRASCO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167612784',
        'name' => 'Juan',
        'last_name_p' => 'Jerez',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179656809',
        'name' => 'Jose Brian ',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013893764K',
        'name' => 'Rodrigo',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Osorio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167913075',
        'name' => 'Hector',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173933932',
        'name' => 'JUAN ',
        'last_name_p' => 'ALFARO',
        'last_name_m' => 'VEGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133567275',
        'name' => 'ELIAS DANIEL',
        'last_name_p' => 'ROMERO',
        'last_name_m' => 'LAFUENTE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123994175',
        'name' => 'Marcelo',
        'last_name_p' => 'Bustamante',
        'last_name_m' => 'Aravena',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161622478',
        'name' => 'Patricio',
        'last_name_p' => 'Puelles',
        'last_name_m' => 'Carmona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165633326',
        'name' => 'Erwin Marcelo',
        'last_name_p' => 'Quilapan',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161359858',
        'name' => 'Juan Manuel',
        'last_name_p' => 'Veliz',
        'last_name_m' => 'Medero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127158800',
        'name' => 'Samuel',
        'last_name_p' => 'Seron',
        'last_name_m' => 'Ruiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132193320',
        'name' => 'Jose',
        'last_name_p' => 'Chavez',
        'last_name_m' => 'Valencia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161327050',
        'name' => 'Yonathan',
        'last_name_p' => 'Wastavino',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150137357',
        'name' => 'Manuel',
        'last_name_p' => 'Alvarez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150005299',
        'name' => 'Henry Washington',
        'last_name_p' => 'Burrows',
        'last_name_m' => 'Luque',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007622014K',
        'name' => 'JULIO CESAR',
        'last_name_p' => 'FIGUEROA ',
        'last_name_m' => 'CASTRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102311345',
        'name' => 'Manuel Alejandro',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Romero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015482409K',
        'name' => 'RODRIGO BERNARDO ',
        'last_name_p' => 'BARRIOS',
        'last_name_m' => 'ZUÑIGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171331803',
        'name' => 'Jourdan Leandro',
        'last_name_p' => 'Villegas',
        'last_name_m' => 'Carrizo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '218092403',
        'name' => 'Edson',
        'last_name_p' => 'Lucas ',
        'last_name_m' => 'Mallcu',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104897053',
        'name' => 'Carlos Alberto',
        'last_name_p' => 'Bruna',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '147590547',
        'name' => 'Anderson ',
        'last_name_p' => 'Reyes',
        'last_name_m' => 'Aguirre',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013013131K',
        'name' => 'Susan Ximena ',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Galleguillos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128401946',
        'name' => 'Digna Marisol',
        'last_name_p' => 'Aburto ',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '74413382',
        'name' => 'Cesar',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Donoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '96803087',
        'name' => 'Jose Enrique',
        'last_name_p' => 'Concha',
        'last_name_m' => 'Villa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84022012',
        'name' => 'Guillermo',
        'last_name_p' => 'Avalos',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151935753',
        'name' => 'SERGIO ANDRES',
        'last_name_p' => 'VASQUEZ',
        'last_name_m' => 'CONTRERAS ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90851802',
        'name' => 'Alejandro',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108776129',
        'name' => 'Carlos Andres',
        'last_name_p' => 'Olguin',
        'last_name_m' => 'Quiroz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125817297',
        'name' => 'Cristian',
        'last_name_p' => 'Becerra',
        'last_name_m' => 'Milla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119328136',
        'name' => 'Manuel',
        'last_name_p' => 'Michea',
        'last_name_m' => 'Correa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151450032',
        'name' => 'Adolfo',
        'last_name_p' => 'Parejas',
        'last_name_m' => 'Caceres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116148137',
        'name' => 'Jimmy Ivan ',
        'last_name_p' => 'Toro',
        'last_name_m' => 'Gutierrez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150453429',
        'name' => 'Juan Sebastian',
        'last_name_p' => 'Valencia',
        'last_name_m' => 'Gallo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176427914',
        'name' => 'Roberto',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158128012',
        'name' => 'Rodrigo',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187938473',
        'name' => 'Rachim',
        'last_name_p' => 'Tejada',
        'last_name_m' => 'Valdebenito',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126103344',
        'name' => 'Juan Francisco ',
        'last_name_p' => 'Alvarez ',
        'last_name_m' => 'Nuñez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91304945',
        'name' => 'Luis',
        'last_name_p' => 'Segovia',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185025845',
        'name' => 'Brando Andres',
        'last_name_p' => 'Collao',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193959733',
        'name' => 'Claudio',
        'last_name_p' => 'Glaser',
        'last_name_m' => 'Leiva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100864207',
        'name' => 'Francisco',
        'last_name_p' => 'Azocar',
        'last_name_m' => 'Medina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115073869',
        'name' => 'Leonel Humberto',
        'last_name_p' => 'Lagos',
        'last_name_m' => 'Mac-Pherson',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141827235',
        'name' => 'DAVID',
        'last_name_p' => 'ARCE',
        'last_name_m' => 'CAVIERES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '68924626',
        'name' => 'Mauricio Del Carmen',
        'last_name_p' => 'Moran',
        'last_name_m' => 'Pinochet',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118157214',
        'name' => 'Jose',
        'last_name_p' => 'Guarachi',
        'last_name_m' => 'Alvarez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179393743',
        'name' => 'Falcon Antonio',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179655810',
        'name' => 'David Hernan',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107358722',
        'name' => 'Juan Antonio ',
        'last_name_p' => 'Diaz ',
        'last_name_m' => 'Honores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105512538',
        'name' => 'Juan',
        'last_name_p' => 'Hinojosa',
        'last_name_m' => 'Farias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015814123K',
        'name' => 'Wladimir Eduardo',
        'last_name_p' => 'Ibaceta',
        'last_name_m' => 'Pereira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104822886',
        'name' => 'Juan',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141115510',
        'name' => 'Oscar Orlando',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Tello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179468654',
        'name' => 'Matias Eduardo',
        'last_name_p' => 'Gomez',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170452747',
        'name' => 'Jorge Abraham',
        'last_name_p' => 'Oliveros',
        'last_name_m' => 'Guidotti',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93280768',
        'name' => 'Jose',
        'last_name_p' => 'Parra',
        'last_name_m' => 'Ibañez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138930599',
        'name' => 'Daniel',
        'last_name_p' => 'Vargas',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92510689',
        'name' => 'Alejandro',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Zuñiga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179864762',
        'name' => 'Daniel',
        'last_name_p' => 'Sanchez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88331605',
        'name' => 'Jose',
        'last_name_p' => 'Olaeta',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131847947',
        'name' => 'Ricardo',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Vergara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124485703',
        'name' => 'Manuel',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136389033',
        'name' => 'GLORIA',
        'last_name_p' => 'PEÑALOZA',
        'last_name_m' => 'CAHUANA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84690902',
        'name' => 'Wilfride',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'X',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162987313',
        'name' => 'Juan',
        'last_name_p' => 'Calderara',
        'last_name_m' => 'Medel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160569069',
        'name' => 'HUGO RICARDO',
        'last_name_p' => 'CALDERON',
        'last_name_m' => 'SANCHEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165143477',
        'name' => 'Exequiel Arturo',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Bustos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '111182787',
        'name' => 'Jose Germán',
        'last_name_p' => 'Yañez',
        'last_name_m' => 'Barria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '149060693',
        'name' => 'Sergio',
        'last_name_p' => 'Centellas',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162214535',
        'name' => 'DAVID ANDRES',
        'last_name_p' => 'ARIAS',
        'last_name_m' => 'COFRE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137182548',
        'name' => 'Ramiro Andres',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Moya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170173783',
        'name' => 'LIVIO',
        'last_name_p' => 'AGUILERA ',
        'last_name_m' => 'JIMENEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151703224',
        'name' => 'Dagoberto',
        'last_name_p' => 'Bustos',
        'last_name_m' => 'Collipal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162585053',
        'name' => 'Hugo Andes',
        'last_name_p' => 'Salas',
        'last_name_m' => 'Mundaca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168741510',
        'name' => 'Juan Cesar',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Manquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157349716',
        'name' => 'LUIS',
        'last_name_p' => 'ARANCIBIA',
        'last_name_m' => 'PEREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123850653',
        'name' => 'gabriel antonio',
        'last_name_p' => 'sepulveda',
        'last_name_m' => 'carrasco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169548994',
        'name' => 'CRISTOBAL ',
        'last_name_p' => 'PINO',
        'last_name_m' => ' CARVAJAL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108860529',
        'name' => 'Ruben',
        'last_name_p' => 'Figueroa',
        'last_name_m' => 'Quijada',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92954536',
        'name' => 'NATANIEL ',
        'last_name_p' => 'ALFARO',
        'last_name_m' => 'CORTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170936183',
        'name' => 'Eduardo Antonio',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Michea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174356297',
        'name' => 'Jose Miguel',
        'last_name_p' => 'Gallardo',
        'last_name_m' => 'Jara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134171790',
        'name' => 'Yordan Alejandro',
        'last_name_p' => 'Tirado',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130055273',
        'name' => 'VICTOR',
        'last_name_p' => 'ARAYA',
        'last_name_m' => 'ZAVALA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78231181',
        'name' => 'Marco Antonio',
        'last_name_p' => 'Maulen',
        'last_name_m' => 'Recabarren',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176625406',
        'name' => 'Pedro Isaias',
        'last_name_p' => 'Valenzuela',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183330896',
        'name' => 'Mario',
        'last_name_p' => 'Ingles',
        'last_name_m' => 'Nahuel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114999407',
        'name' => 'Juan ',
        'last_name_p' => 'Marin',
        'last_name_m' => 'Marinao',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '233016772',
        'name' => 'RUBEN ',
        'last_name_p' => 'FALGA',
        'last_name_m' => 'RODRIGUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187928818',
        'name' => 'Maikol',
        'last_name_p' => 'Portilla',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178612662',
        'name' => 'Nelson',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160860316',
        'name' => 'Juan Francisco ',
        'last_name_p' => 'Coñoman',
        'last_name_m' => 'Briones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141120352',
        'name' => 'Mauricio',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Valdivia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122147517',
        'name' => 'Marcial',
        'last_name_p' => 'Alcayaga',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126129475',
        'name' => 'Carlos',
        'last_name_p' => 'Urquieta',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180145583',
        'name' => 'Pedro',
        'last_name_p' => 'Ugarte',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184214954',
        'name' => 'Ivan',
        'last_name_p' => 'Betancourt',
        'last_name_m' => 'Valencia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '69265049',
        'name' => 'Daniel ',
        'last_name_p' => 'Lillo',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173206259',
        'name' => 'Cristian Alonso',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168055854',
        'name' => 'ELIAS GABRIEL ',
        'last_name_p' => 'JARA',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137430843',
        'name' => 'Carlos',
        'last_name_p' => 'Cueto',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134263156',
        'name' => 'Gonzalo',
        'last_name_p' => 'Lago',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109196614',
        'name' => 'Sergio',
        'last_name_p' => 'Zurita',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132126658',
        'name' => 'alejandro javier',
        'last_name_p' => 'muñoz',
        'last_name_m' => 'palza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106894035',
        'name' => 'Claudia',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Rocha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '83594659',
        'name' => 'jorge',
        'last_name_p' => 'vargas',
        'last_name_m' => 'lechuga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156802018',
        'name' => 'Rodrigo',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '71356205',
        'name' => 'TULIO',
        'last_name_p' => 'VERDUGO',
        'last_name_m' => 'ROSAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94266548',
        'name' => 'Francisco ',
        'last_name_p' => 'Aracena ',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157692569',
        'name' => 'Alejandro',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Ayabire',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128009647',
        'name' => 'Jenaro',
        'last_name_p' => 'Yau',
        'last_name_m' => 'Farfán',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156910139',
        'name' => 'Cristian',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168190425',
        'name' => 'Jose Eduardo',
        'last_name_p' => 'Marquez',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122159302',
        'name' => 'Nasslo',
        'last_name_p' => 'Altamirano',
        'last_name_m' => 'Leposte',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93947711',
        'name' => 'Alejandro Pedro',
        'last_name_p' => 'Pastenes',
        'last_name_m' => 'Idiaquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167235166',
        'name' => 'Abelardo',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141137220',
        'name' => 'Fernando Rodrigo',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '83541237',
        'name' => 'Benjamin',
        'last_name_p' => 'Selsene',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161355569',
        'name' => 'Mauricio',
        'last_name_p' => 'Barrios',
        'last_name_m' => 'Selfene',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119311306',
        'name' => 'Gumercindo',
        'last_name_p' => 'Vargas',
        'last_name_m' => 'Taipe',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138085309',
        'name' => 'Celin',
        'last_name_p' => 'Molina',
        'last_name_m' => 'Riffo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125748791',
        'name' => 'PAULA ',
        'last_name_p' => 'PEREZ',
        'last_name_m' => 'SEGURA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164500772',
        'name' => 'Rodrigo Andres',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Meneses',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165496124',
        'name' => 'Julio ',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Ramos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81080879',
        'name' => 'Ricardo',
        'last_name_p' => 'Romero',
        'last_name_m' => 'Neira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162034413',
        'name' => 'Guillermo',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Antiquera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93190556',
        'name' => 'Eleacin Omar',
        'last_name_p' => 'Alegria',
        'last_name_m' => 'Fabrega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122389928',
        'name' => 'Claudio',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150145805',
        'name' => 'JUAN',
        'last_name_p' => 'CORTES',
        'last_name_m' => 'ACUÑA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009729206K',
        'name' => 'Arturo Isaias ',
        'last_name_p' => 'Panozo ',
        'last_name_m' => 'Ceron ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119019397',
        'name' => 'Marcelo',
        'last_name_p' => 'Gutierres',
        'last_name_m' => 'Mardones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91016575',
        'name' => 'John',
        'last_name_p' => 'Brown',
        'last_name_m' => 'Ferret',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007517036K',
        'name' => 'ROGELIO',
        'last_name_p' => 'RIVEROS',
        'last_name_m' => 'FLORES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73671795',
        'name' => 'Hector Jaime',
        'last_name_p' => 'Santibañez',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174653240',
        'name' => 'PEDRO',
        'last_name_p' => 'CORTES',
        'last_name_m' => 'SAEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127917256',
        'name' => 'Alejandro',
        'last_name_p' => 'Rebolledo',
        'last_name_m' => 'G.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172775853',
        'name' => 'Cristobal',
        'last_name_p' => 'Robledo',
        'last_name_m' => 'Medalla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109367753',
        'name' => 'Angel',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Humeres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115183133',
        'name' => 'Omar Nelson',
        'last_name_p' => 'Tejos',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89310644',
        'name' => 'Orlando Anibal',
        'last_name_p' => 'Valdivia',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150142393',
        'name' => 'Cristian',
        'last_name_p' => 'Centella',
        'last_name_m' => 'Cuevas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150253217',
        'name' => 'Oscar Andres',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Valderrama',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137434717',
        'name' => 'Wilson',
        'last_name_p' => 'Carral',
        'last_name_m' => 'Navarrete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122577236',
        'name' => 'LUIS',
        'last_name_p' => 'GUTIERREZ',
        'last_name_m' => 'VALLADARES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009298608K',
        'name' => 'Luis Basilio De Jesus',
        'last_name_p' => 'Frez',
        'last_name_m' => 'Salinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115046845',
        'name' => 'Alfredo René',
        'last_name_p' => 'Zurita',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129733063',
        'name' => 'Ricardo Andres',
        'last_name_p' => 'Cerda',
        'last_name_m' => 'Crisostomo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182322334',
        'name' => 'Elias Ricardo',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Leon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131101880',
        'name' => 'Miguel',
        'last_name_p' => 'Loyola',
        'last_name_m' => 'Andaur',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160513225',
        'name' => 'Lixy Jaqueline',
        'last_name_p' => 'Ortiz',
        'last_name_m' => 'Chavez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136384309',
        'name' => 'Patricio',
        'last_name_p' => 'Francino',
        'last_name_m' => 'Francino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170921992',
        'name' => 'CHRISTOPHER',
        'last_name_p' => 'CUETO',
        'last_name_m' => 'CISTERNA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '234428411',
        'name' => 'Wilson Marcos',
        'last_name_p' => 'Choquevillca',
        'last_name_m' => 'Azurduy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009267441K',
        'name' => 'Ricardo Elias ',
        'last_name_p' => 'Lopez ',
        'last_name_m' => 'Ardiles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141005693',
        'name' => 'Mario Alejandro',
        'last_name_p' => 'Chacon',
        'last_name_m' => 'Borquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119377943',
        'name' => 'Darwin Manuel',
        'last_name_p' => 'Bugueño ',
        'last_name_m' => 'Tello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168680198',
        'name' => 'Roberto',
        'last_name_p' => 'Mora',
        'last_name_m' => 'Donoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131713150',
        'name' => 'Oscar ',
        'last_name_p' => 'Chavez ',
        'last_name_m' => 'Rossel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117486141',
        'name' => 'Wilson Guillermo',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012616713K',
        'name' => 'Eric Alejandro',
        'last_name_p' => 'Caceres',
        'last_name_m' => 'Rios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166715563',
        'name' => 'Luis',
        'last_name_p' => 'Orquera',
        'last_name_m' => 'Peralta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75868642',
        'name' => 'JUAN OSVALDO',
        'last_name_p' => 'VILLALOBOS',
        'last_name_m' => 'SALVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131785356',
        'name' => 'PAOLO',
        'last_name_p' => 'VIVAR',
        'last_name_m' => 'ARAYA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123957172',
        'name' => 'Luis',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128363203',
        'name' => 'Ronaldo Jose',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '195395926',
        'name' => 'Diego',
        'last_name_p' => 'Roman',
        'last_name_m' => 'Copetta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116109905',
        'name' => 'Jorge',
        'last_name_p' => 'Vidaurre',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175620133',
        'name' => 'Leonardo',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Parra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159823474',
        'name' => 'Danny Gabriel',
        'last_name_p' => 'Valderrama',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173316127',
        'name' => 'Marcelino',
        'last_name_p' => 'Campillay',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154623248',
        'name' => 'ROBERTO',
        'last_name_p' => 'ARCE',
        'last_name_m' => 'FUENTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105642199',
        'name' => 'Gabriel',
        'last_name_p' => 'Aballay ',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141178253',
        'name' => 'Carlos Alberto',
        'last_name_p' => 'Gonzalez ',
        'last_name_m' => 'Miles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123487672',
        'name' => 'Cristian',
        'last_name_p' => 'Ogalde',
        'last_name_m' => 'Zeballos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162448331',
        'name' => 'Cesar Antonio',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Cavieres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '194945655',
        'name' => 'Fabian Enrique',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126094531',
        'name' => 'Paul ',
        'last_name_p' => 'Pierola',
        'last_name_m' => 'Mesina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169277036',
        'name' => 'Fredy',
        'last_name_p' => 'Cortez',
        'last_name_m' => 'Barraza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188271898',
        'name' => 'Jorge Eduardo',
        'last_name_p' => 'Espindola',
        'last_name_m' => 'Mansilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188271162',
        'name' => 'Jordan',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014108528K',
        'name' => 'Rene',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Escamilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125529593',
        'name' => 'Francisco',
        'last_name_p' => 'Agüero',
        'last_name_m' => 'Letelier',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188610544',
        'name' => 'Levi',
        'last_name_p' => 'Acosta',
        'last_name_m' => 'Zepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181256516',
        'name' => 'JEAN LIZANDRO',
        'last_name_p' => 'CALDERON',
        'last_name_m' => 'BARRAZA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015015989K',
        'name' => 'Jordan Alfonso',
        'last_name_p' => 'Tabilo',
        'last_name_m' => 'Moro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145859271',
        'name' => 'Salek',
        'last_name_p' => 'Loma',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128319387',
        'name' => 'Lenin Antonio',
        'last_name_p' => 'Ramos ',
        'last_name_m' => 'Bermejo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161329002',
        'name' => 'Cristian',
        'last_name_p' => 'Arraibel',
        'last_name_m' => 'Nunez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126176791',
        'name' => 'Christian',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151974546',
        'name' => 'ANTONIO ELIECER ',
        'last_name_p' => 'CARRILLO',
        'last_name_m' => 'RIFO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181247517',
        'name' => 'Luis Alberto',
        'last_name_p' => 'Burgos',
        'last_name_m' => 'Hurtado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134178272',
        'name' => 'Mario',
        'last_name_p' => 'Villaroel',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102466489',
        'name' => 'Jose Manuel',
        'last_name_p' => 'Cabrera',
        'last_name_m' => 'Cruz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '241418987',
        'name' => 'Jaime',
        'last_name_p' => 'Cocha',
        'last_name_m' => 'Robles ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187909244',
        'name' => 'Camilo',
        'last_name_p' => 'Aranda',
        'last_name_m' => 'Siede',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170203526',
        'name' => 'Daniel',
        'last_name_p' => 'Cayo',
        'last_name_m' => 'Brito',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167050352',
        'name' => 'Abel Ivan',
        'last_name_p' => 'Centella',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012567139K',
        'name' => 'Roberto Constantino',
        'last_name_p' => 'Pantelakos',
        'last_name_m' => 'Espejo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '85028391',
        'name' => 'ERNESTO OSVALDO',
        'last_name_p' => 'CASTAÑEDA',
        'last_name_m' => 'ESQUIVEL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128385304',
        'name' => 'PABLO',
        'last_name_p' => 'ITURRIETA',
        'last_name_m' => 'CARMONA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164436276',
        'name' => 'Emanuel Antonio',
        'last_name_p' => 'Rosales',
        'last_name_m' => 'Neira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '258779304',
        'name' => 'Agustin',
        'last_name_p' => 'Garcia ',
        'last_name_m' => 'Quiroga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170930010',
        'name' => 'Julio Alejandro',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Coria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170929209',
        'name' => 'CAMILO',
        'last_name_p' => 'JORQUERA',
        'last_name_m' => 'ALVARADO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179748622',
        'name' => 'Robert',
        'last_name_p' => 'Acuña',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015769586K',
        'name' => 'sergio',
        'last_name_p' => 'lefiñir',
        'last_name_m' => 's',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162587226',
        'name' => 'Leonardo ',
        'last_name_p' => 'Baustista',
        'last_name_m' => 'Torre',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191473663',
        'name' => 'FRANCISCO JAVIER',
        'last_name_p' => 'ACUÑA ',
        'last_name_m' => 'SILVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134118105',
        'name' => 'Luis Carlos Mauricio',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Berrios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128053905',
        'name' => 'Carlos Francisco ',
        'last_name_p' => 'Pinto ',
        'last_name_m' => 'Reyes ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145939402',
        'name' => 'Milton Cuper',
        'last_name_p' => 'Calahuana',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176551607',
        'name' => 'Maykel Andres',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Trigo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '97792526',
        'name' => 'CARLOS ',
        'last_name_p' => 'TORO',
        'last_name_m' => 'ROJAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116989891',
        'name' => 'Juan',
        'last_name_p' => 'Cid',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86985365',
        'name' => 'Belarmino',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Avalos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105229038',
        'name' => 'Fernando Alberto',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102156862',
        'name' => 'Carlos Humberto',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Daza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173490267',
        'name' => 'Daniel',
        'last_name_p' => 'Alarcon',
        'last_name_m' => 'Figueroa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155144173',
        'name' => 'Raul Osman',
        'last_name_p' => 'Ojeda',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113779292',
        'name' => 'Manuel Rosendo ',
        'last_name_p' => 'Salas ',
        'last_name_m' => 'Farias ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89406463',
        'name' => 'Esteban',
        'last_name_p' => 'Orellana',
        'last_name_m' => 'Ayala',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143094405',
        'name' => 'Mario',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Hinojosa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '195518092',
        'name' => 'JUAN ',
        'last_name_p' => 'TICONA',
        'last_name_m' => 'TICONA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011722256K',
        'name' => 'Ricardo Marcelo ',
        'last_name_p' => 'Yevenes ',
        'last_name_m' => 'Alcayaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '65851180',
        'name' => 'Segundo',
        'last_name_p' => 'Concha',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82027238',
        'name' => 'Ricardo Max',
        'last_name_p' => 'Aburto',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '189000723',
        'name' => 'Jean',
        'last_name_p' => 'Vergara',
        'last_name_m' => 'Mancilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '210129804',
        'name' => 'ABRAHAM ALDO',
        'last_name_p' => 'HUAGUAMA',
        'last_name_m' => 'CHOCOBAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86768933',
        'name' => 'CARLOS ALFREDO',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'SORENSEN ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163508435',
        'name' => 'Hernan Rodrigo',
        'last_name_p' => 'Avila',
        'last_name_m' => 'Mena',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117201368',
        'name' => 'Fernando',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Cruz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135283908',
        'name' => 'Rodrigo Eleodoro',
        'last_name_p' => 'Cruz ',
        'last_name_m' => 'Henriquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158101122',
        'name' => 'Rodrigo',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018235323K',
        'name' => 'Jhon',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Lagos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150440882',
        'name' => 'Cristian',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78612819',
        'name' => 'Ivan',
        'last_name_p' => 'Alvayay',
        'last_name_m' => 'Ossandon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101516970',
        'name' => 'Carlos Eduardo ',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Garay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123478134',
        'name' => 'Alejandro',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Gallardo ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133884556',
        'name' => 'RENAN',
        'last_name_p' => 'CARRIEL ',
        'last_name_m' => 'OÑATE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135738549',
        'name' => 'Sergio',
        'last_name_p' => 'Campos',
        'last_name_m' => 'Fantobal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132114226',
        'name' => 'Mauro',
        'last_name_p' => 'Parra',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182336564',
        'name' => 'Enrique Antonio',
        'last_name_p' => 'Huerta ',
        'last_name_m' => 'Balcazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89287979',
        'name' => 'JUAN',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'ELGUETA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126128843',
        'name' => 'Andres ',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Mujica',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121703637',
        'name' => 'Rodrigo',
        'last_name_p' => 'Valdes',
        'last_name_m' => 'Moreno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128355707',
        'name' => 'Cristian',
        'last_name_p' => 'Tirado',
        'last_name_m' => 'García',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90978764',
        'name' => 'Marco',
        'last_name_p' => 'Rebolledo',
        'last_name_m' => 'Romero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168744048',
        'name' => 'Eduardo',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Correa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161342521',
        'name' => 'Carol',
        'last_name_p' => 'Azola',
        'last_name_m' => 'Miranda ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165494768',
        'name' => 'Jessica',
        'last_name_p' => 'Arias',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166142261',
        'name' => 'Nataly Alejandra ',
        'last_name_p' => 'Rebolledo',
        'last_name_m' => 'Ardiles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169724288',
        'name' => 'Luis',
        'last_name_p' => 'Valdes',
        'last_name_m' => 'Benavides',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161996270',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Jeraldino',
        'last_name_m' => 'Cifuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135365289',
        'name' => 'Manuel',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171621232',
        'name' => 'Daniel Andres',
        'last_name_p' => 'Fuentealba',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129430435',
        'name' => 'Mauro',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Gloria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161939137',
        'name' => 'Jonathan',
        'last_name_p' => 'Marchant',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015056669K',
        'name' => 'Franco',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012419444K',
        'name' => 'Mirza',
        'last_name_p' => 'Rojas',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166875331',
        'name' => 'Bastián ',
        'last_name_p' => 'Torres ',
        'last_name_m' => 'Varas ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125755712',
        'name' => 'Claudia',
        'last_name_p' => 'Acosta',
        'last_name_m' => 'Acuña',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163955415',
        'name' => 'Paulina',
        'last_name_p' => 'Vidal',
        'last_name_m' => 'Rozas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157850571',
        'name' => 'Vanessa',
        'last_name_p' => 'Sepulveda',
        'last_name_m' => 'Gallo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165046439',
        'name' => 'GUILLERMO',
        'last_name_p' => 'HERNANDEZ',
        'last_name_m' => 'HERNANDEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105310013',
        'name' => 'Felix',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126594585',
        'name' => 'German Andres',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150222974',
        'name' => 'Jimmy Edder',
        'last_name_p' => 'Andrade',
        'last_name_m' => 'Meneses',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016436156K',
        'name' => 'Paula',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Iturra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105305443',
        'name' => 'Pedro Pablo',
        'last_name_p' => 'Latorre',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132206767',
        'name' => 'Miguel Angel',
        'last_name_p' => 'Toro',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125580963',
        'name' => 'JIMENA',
        'last_name_p' => 'VALDEBENITO',
        'last_name_m' => 'PARRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155013761',
        'name' => 'Cesar',
        'last_name_p' => 'Avendaño',
        'last_name_m' => 'Huerta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172236979',
        'name' => 'Erick',
        'last_name_p' => 'avendaño',
        'last_name_m' => 'Henriquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '259060443',
        'name' => 'Frank Alejandro',
        'last_name_p' => 'Roman',
        'last_name_m' => 'Ortega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136234684',
        'name' => 'Cesar Antonio ',
        'last_name_p' => 'Barriga ',
        'last_name_m' => 'Ulloa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141895036',
        'name' => 'Hector Osvaldo ',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Aguila',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182353612',
        'name' => 'LUCAS',
        'last_name_p' => 'GALLEGUILLOS',
        'last_name_m' => 'SOMMERVILLE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150957508',
        'name' => 'MARCELO ANTONIO',
        'last_name_p' => 'CASTAGNETO',
        'last_name_m' => 'NOVOA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165161823',
        'name' => 'Cristian',
        'last_name_p' => 'Parra',
        'last_name_m' => 'Mella',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142090589',
        'name' => 'Raul',
        'last_name_p' => 'Villaseca',
        'last_name_m' => 'Bengoa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142100843',
        'name' => 'Pablo',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '153404305',
        'name' => 'Miguel Alejandro',
        'last_name_p' => 'Navarrete',
        'last_name_m' => 'Torrico',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016436691K',
        'name' => 'Rafael',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Montesinos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015692119K',
        'name' => 'Jose',
        'last_name_p' => 'Hun',
        'last_name_m' => 'Lamas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150173655',
        'name' => 'Carlos',
        'last_name_p' => 'Concha',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116145588',
        'name' => 'GERMAN',
        'last_name_p' => 'YAU',
        'last_name_m' => 'FARFAN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170941845',
        'name' => 'Manuel',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126292139',
        'name' => 'Claudio Enrique',
        'last_name_p' => 'Navarro',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122148734',
        'name' => 'Marcelino',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Galvan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130119786',
        'name' => 'Augusto Carlos',
        'last_name_p' => 'Cartacho',
        'last_name_m' => 'Carvajal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '68546818',
        'name' => 'Adan Del Rosario ',
        'last_name_p' => 'Marinez',
        'last_name_m' => ' Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150208270',
        'name' => 'Humberto ',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Castro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135137626',
        'name' => 'Gaston Ricardo',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Mayorinca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159821102',
        'name' => 'Yoni Alfredo',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94376408',
        'name' => 'Nelson Exequiel',
        'last_name_p' => 'Estay',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129442786',
        'name' => 'Marcelo',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137478242',
        'name' => 'Raúl Alejandro',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131362617',
        'name' => 'Cristian Alexis',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122149684',
        'name' => 'Marco',
        'last_name_p' => 'Matamoros',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106746931',
        'name' => 'Daniel',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Moreno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132120633',
        'name' => 'Rodrigo',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Calle',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138671151',
        'name' => 'Fernando Ariel',
        'last_name_p' => 'Silva',
        'last_name_m' => 'Godoy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115712942',
        'name' => 'Sergio Enrique',
        'last_name_p' => 'Pradenas',
        'last_name_m' => 'Guerra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101512584',
        'name' => 'Ricardo',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Jaque',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136504231',
        'name' => 'Ignacio',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156919802',
        'name' => 'Marco',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105271964',
        'name' => 'Simon',
        'last_name_p' => 'Jorquera',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130083420',
        'name' => 'Mauricio',
        'last_name_p' => 'Ocaranza',
        'last_name_m' => 'Cuello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158140268',
        'name' => 'Paulo',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Campillay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140294888',
        'name' => 'Jose',
        'last_name_p' => 'Oliva',
        'last_name_m' => 'sanhueza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185105792',
        'name' => 'Jorge Esteban',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159113930',
        'name' => 'Flavio',
        'last_name_p' => 'Saez',
        'last_name_m' => 'Chandia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183173006',
        'name' => 'Diego Alexis',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167717691',
        'name' => 'Ronald',
        'last_name_p' => 'Terraza',
        'last_name_m' => 'Manzanares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187417465',
        'name' => 'Darwin',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Hidalgo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156946664',
        'name' => 'Exequiel',
        'last_name_p' => 'Carrizo',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168753012',
        'name' => 'Luis ',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Salinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108332379',
        'name' => 'Edwin',
        'last_name_p' => 'Aliaga',
        'last_name_m' => 'Aliaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175537031',
        'name' => 'Daniel Alejandro',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128351825',
        'name' => 'Oscar',
        'last_name_p' => 'Villanueva',
        'last_name_m' => 'Villanueva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160349638',
        'name' => 'Milenko Esteban',
        'last_name_p' => 'Abrigo',
        'last_name_m' => 'Abrigo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174326657',
        'name' => 'Borys Patricio',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181595930',
        'name' => 'Valerie',
        'last_name_p' => 'Astorga',
        'last_name_m' => 'Manrique',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117203522',
        'name' => 'Mario',
        'last_name_p' => 'Peralta',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169276765',
        'name' => 'Herme',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178691163',
        'name' => 'Miguel',
        'last_name_p' => 'Fernandez',
        'last_name_m' => 'Guardia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017094299K',
        'name' => 'Manuel',
        'last_name_p' => 'Collao',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167034624',
        'name' => 'Jonathan',
        'last_name_p' => 'Manterola',
        'last_name_m' => 'Manterola',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143535924',
        'name' => 'Rodrigo Ivan',
        'last_name_p' => 'Segura',
        'last_name_m' => 'Gallegos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011992801K',
        'name' => 'Cesar',
        'last_name_p' => 'Campusano',
        'last_name_m' => 'Aguilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010318584K',
        'name' => 'Manuel',
        'last_name_p' => 'Pinto',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138647625',
        'name' => 'Kabir Jesus',
        'last_name_p' => 'Lara',
        'last_name_m' => 'Chamber',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156925683',
        'name' => 'VICTOR ALBERTO',
        'last_name_p' => 'VILLCA',
        'last_name_m' => 'ALAVE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015590139K',
        'name' => 'Andres',
        'last_name_p' => 'Saldias',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131806825',
        'name' => 'Italo',
        'last_name_p' => 'Valenzuela',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144704002',
        'name' => 'JUAN ',
        'last_name_p' => 'SOBARZO',
        'last_name_m' => 'ORTEGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143797090',
        'name' => 'FRANCISCO JAVIER',
        'last_name_p' => 'NILO',
        'last_name_m' => 'GALLARDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012804745K',
        'name' => 'Pedro',
        'last_name_p' => 'Carpio',
        'last_name_m' => 'Sepulveda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '243339030',
        'name' => 'Rafael',
        'last_name_p' => 'Arias',
        'last_name_m' => 'Quiñones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016348109K',
        'name' => 'Cristian',
        'last_name_p' => 'Solis',
        'last_name_m' => 'Salvo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188792871',
        'name' => 'Uribe Valencia',
        'last_name_p' => 'Nelson',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112920331',
        'name' => 'Oscar Gregorio',
        'last_name_p' => 'Figueroa',
        'last_name_m' => 'Gaete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156805025',
        'name' => 'Jorge',
        'last_name_p' => 'Rocha',
        'last_name_m' => 'Sanz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159828689',
        'name' => 'Juan',
        'last_name_p' => 'Aramayo',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014040280K',
        'name' => 'Mauricio Renan',
        'last_name_p' => 'Burgos',
        'last_name_m' => 'Burgos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125763774',
        'name' => 'Francisco',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163058138',
        'name' => 'Guillermo',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Roco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130105475',
        'name' => 'Eduardo Javier',
        'last_name_p' => 'Alquinta',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176552441',
        'name' => 'Carlos',
        'last_name_p' => 'Cisternas',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119046750',
        'name' => 'RICARDO ',
        'last_name_p' => 'MARIN',
        'last_name_m' => 'SALAZAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105470355',
        'name' => 'Omar',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150334292',
        'name' => 'Juan',
        'last_name_p' => 'Chilla',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119316057',
        'name' => 'Juan',
        'last_name_p' => 'Caamaño',
        'last_name_m' => 'Ruiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92251241',
        'name' => 'Agustin',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Barraza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140090352',
        'name' => 'Felipe',
        'last_name_p' => 'Basaure',
        'last_name_m' => 'Becerra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112052429',
        'name' => 'Erick Alberto',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Jorquera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82441905',
        'name' => 'Jorge ',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Vergara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78819464',
        'name' => 'Andres',
        'last_name_p' => 'Navarro',
        'last_name_m' => 'Cangana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93381807',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Valdivia',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007440720K',
        'name' => 'Juan',
        'last_name_p' => 'Sainz',
        'last_name_m' => 'Pardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013434394K',
        'name' => 'Alex Antonio',
        'last_name_p' => 'Cornejo',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141726307',
        'name' => 'Luis ',
        'last_name_p' => 'Cortés ',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174100055',
        'name' => 'DANIEL IGNACIO',
        'last_name_p' => 'ARQUEROS',
        'last_name_m' => 'RODRIGUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016111152K',
        'name' => 'Luis',
        'last_name_p' => 'Adaros',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184048264',
        'name' => 'Felipe Camilo',
        'last_name_p' => 'Calfin',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174376743',
        'name' => 'SEBASTIAN ',
        'last_name_p' => 'PEÑAILILLO',
        'last_name_m' => 'PEÑAILILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89198925',
        'name' => 'Luis Alberto',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Urbina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170199952',
        'name' => 'Luis',
        'last_name_p' => 'Venenciano',
        'last_name_m' => 'Valdivia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130100740',
        'name' => 'Cristian',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Mogro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131785763',
        'name' => 'Ema Isabel ',
        'last_name_p' => 'Gallardo ',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81601771',
        'name' => 'Jorge',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Oyarzun',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119303079',
        'name' => 'Elvys Edson',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128368582',
        'name' => 'Luis Esteban ',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Piones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162585401',
        'name' => 'Manuel',
        'last_name_p' => 'Callpa',
        'last_name_m' => 'Carrazana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015763433K',
        'name' => 'Enrique Ignacio',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Palavicino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156784656',
        'name' => 'Miguel',
        'last_name_p' => 'Troncoso',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116148358',
        'name' => 'Claudio',
        'last_name_p' => 'Aguilar',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84961566',
        'name' => 'Armando',
        'last_name_p' => 'Quezada',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120807102',
        'name' => 'David',
        'last_name_p' => 'Aguilera ',
        'last_name_m' => 'Brito',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179521555',
        'name' => 'Jorge',
        'last_name_p' => 'Rifo',
        'last_name_m' => 'Arias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179375087',
        'name' => 'Manuel Hans ',
        'last_name_p' => 'Toledo ',
        'last_name_m' => 'Toledo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150005256',
        'name' => 'Patricio Eduardo',
        'last_name_p' => 'Berrios',
        'last_name_m' => 'Berrios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116361469',
        'name' => 'Luis',
        'last_name_p' => 'Fuentes',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177360767',
        'name' => 'Diego Andres',
        'last_name_p' => 'Campos ',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118178858',
        'name' => 'Williams',
        'last_name_p' => 'Horstmeier',
        'last_name_m' => 'Chelme ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180181563',
        'name' => 'Jorge Esteban',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Zamora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124475260',
        'name' => 'Harry',
        'last_name_p' => 'Vergara',
        'last_name_m' => 'Berenguela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139789466',
        'name' => 'Alvaro',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Daza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107814310',
        'name' => 'ADAN',
        'last_name_p' => 'VENEGAS',
        'last_name_m' => 'SEPULVEDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155750472',
        'name' => 'Annie Paulina',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140077445',
        'name' => 'Jose',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Tobar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95571247',
        'name' => 'ELIANA',
        'last_name_p' => 'DIAZ',
        'last_name_m' => 'MALUENADA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168332548',
        'name' => 'Rodrigo Fabian',
        'last_name_p' => 'Antibilo',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '238685095',
        'name' => 'Jorge  Luis',
        'last_name_p' => 'Caro',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017310524K',
        'name' => 'Cristobal',
        'last_name_p' => 'Alarcon',
        'last_name_m' => 'Needham',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124941873',
        'name' => 'Rodrigo',
        'last_name_p' => 'Foster',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165654684',
        'name' => 'DIEGO ANDRES',
        'last_name_p' => 'DROGUETT',
        'last_name_m' => 'BARRERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162595067',
        'name' => 'Jennifer',
        'last_name_p' => 'Campillay',
        'last_name_m' => 'Astorga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184839008',
        'name' => 'Fresia Margarita',
        'last_name_p' => 'Basovich',
        'last_name_m' => 'Vargas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141063502',
        'name' => 'Juan Pablo',
        'last_name_p' => 'Vargas',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159910539',
        'name' => 'Marcelo',
        'last_name_p' => 'Avila',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137451387',
        'name' => 'Danny Daniel',
        'last_name_p' => 'Estay',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133800816',
        'name' => 'Yohana ',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Llanos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010492428K',
        'name' => 'HERIBERTO',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'BECERRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '103351359',
        'name' => 'SANDRA',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'ALEGRIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128017755',
        'name' => 'Javier',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170993799',
        'name' => 'GERMAN',
        'last_name_p' => 'LAZO',
        'last_name_m' => 'HERNANDEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132203660',
        'name' => 'Gino Elbis',
        'last_name_p' => 'Mosnich',
        'last_name_m' => 'Roca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '18838400',
        'name' => 'CHANTAL',
        'last_name_p' => 'GUERRA',
        'last_name_m' => 'GUERRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134256788',
        'name' => 'CHAUKET',
        'last_name_p' => 'KARIN',
        'last_name_m' => 'JARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169273081',
        'name' => 'Karina',
        'last_name_p' => 'Cortes',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184838400',
        'name' => 'CHANTAL',
        'last_name_p' => 'GUERRA',
        'last_name_m' => 'GUERRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129395184',
        'name' => 'ROBERTO',
        'last_name_p' => 'ARAYA',
        'last_name_m' => 'CORNEJO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139562011',
        'name' => 'Fabian Daniel',
        'last_name_p' => 'Feliu',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122159086',
        'name' => 'Jaime Segundo',
        'last_name_p' => 'Donoso',
        'last_name_m' => 'Mandiola',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133597263',
        'name' => 'Marcelo',
        'last_name_p' => 'Collao',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178757792',
        'name' => 'Felipe ',
        'last_name_p' => 'Rozas',
        'last_name_m' => 'Torrrejon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009552236K',
        'name' => 'Osvaldo',
        'last_name_p' => 'Avalos',
        'last_name_m' => 'Alcota',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164365476',
        'name' => 'Cristobal',
        'last_name_p' => 'Colon',
        'last_name_m' => 'Huanchicay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191250893',
        'name' => 'Brian Andres',
        'last_name_p' => 'Mendoza',
        'last_name_m' => 'Bustos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130150373',
        'name' => 'Rene Armando',
        'last_name_p' => 'Plaza ',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125823289',
        'name' => 'Cristian Enrique',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88046315',
        'name' => 'Fernando',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Huerta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137843234',
        'name' => 'JOHNY',
        'last_name_p' => 'JIMENEZ',
        'last_name_m' => 'NAVARRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016593220K',
        'name' => 'Carlos ',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Medina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106988374',
        'name' => 'Marco Antonio',
        'last_name_p' => 'Gamez',
        'last_name_m' => 'Aguilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128375449',
        'name' => 'Miguel Angel',
        'last_name_p' => 'Godoy',
        'last_name_m' => 'Bustos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90469185',
        'name' => 'Manuel Alberto',
        'last_name_p' => 'Chacon ',
        'last_name_m' => 'Urrea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187920663',
        'name' => 'Paulo Nicolas ',
        'last_name_p' => 'Huerta ',
        'last_name_m' => 'Diaz ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174379483',
        'name' => 'Oscar',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Solor',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113205717',
        'name' => 'Ariel',
        'last_name_p' => 'Inzunza',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '147255292',
        'name' => 'Julio Cesar',
        'last_name_p' => 'Cisternas',
        'last_name_m' => 'Talledo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181024747',
        'name' => 'FRANCISCO ',
        'last_name_p' => 'SOTO',
        'last_name_m' => 'SOTO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115075195',
        'name' => 'Braulio',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113131047',
        'name' => 'Alvaro Ivan',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150555140',
        'name' => 'Willy',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146653146',
        'name' => 'Miguel ',
        'last_name_p' => 'Coquis ',
        'last_name_m' => 'Ordoes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164861775',
        'name' => 'Patricio',
        'last_name_p' => 'Vergara',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167334091',
        'name' => 'Jaime',
        'last_name_p' => 'Tolmo',
        'last_name_m' => 'Cisterna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '217658101',
        'name' => 'Fernando',
        'last_name_p' => 'Mantilla',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161837644',
        'name' => 'Esteban',
        'last_name_p' => 'Valenzuela',
        'last_name_m' => 'Zamora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137538075',
        'name' => 'Michel',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Figueroa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164498492',
        'name' => 'Claudio',
        'last_name_p' => 'Zamora',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159254151',
        'name' => 'Walter',
        'last_name_p' => 'Mamani',
        'last_name_m' => 'Duran',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104611915',
        'name' => 'Miguel Angel',
        'last_name_p' => 'Figueroa',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012800338K',
        'name' => 'Javier',
        'last_name_p' => 'Viza',
        'last_name_m' => 'Viza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155138297',
        'name' => 'Orlando',
        'last_name_p' => 'Marcoleta',
        'last_name_m' => 'Altamirano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009372366K',
        'name' => 'Victor',
        'last_name_p' => 'Araneda',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91361396',
        'name' => 'Ernesto Segundo',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Retamal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '99832029',
        'name' => 'Pedro Wilson',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Mondaca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141286854',
        'name' => 'Carlos',
        'last_name_p' => 'Obregon',
        'last_name_m' => 'Recabarren',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133500308',
        'name' => 'Pablo ',
        'last_name_p' => 'Acevedo',
        'last_name_m' => 'Guajardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '024432875K',
        'name' => 'Jorge Ali',
        'last_name_p' => 'Murillo',
        'last_name_m' => 'Longa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109130206',
        'name' => 'Nelson Manuel',
        'last_name_p' => 'Miranda',
        'last_name_m' => 'Arancibia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108469927',
        'name' => 'Jorge',
        'last_name_p' => 'Pinto',
        'last_name_m' => 'Irribarren',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90996517',
        'name' => 'Juan',
        'last_name_p' => 'Mancilla',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114673714',
        'name' => 'Claudio',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Delgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80945086',
        'name' => 'Juan',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Aillapi',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125593615',
        'name' => 'Leonardo Fabian',
        'last_name_p' => 'Cabezas',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170203798',
        'name' => 'JONATHAN',
        'last_name_p' => 'OPAZO',
        'last_name_m' => 'DIAZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007588527K',
        'name' => 'Patricio',
        'last_name_p' => 'Veas',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130131786',
        'name' => 'ANSEL',
        'last_name_p' => 'COSMING',
        'last_name_m' => 'MURA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010362746K',
        'name' => 'Freddy Arnaldo',
        'last_name_p' => 'Nuñez',
        'last_name_m' => 'Cartes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '195390738',
        'name' => 'Thannya Fernanda',
        'last_name_p' => 'Huerta',
        'last_name_m' => 'Mancilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119988179',
        'name' => 'Elvis',
        'last_name_p' => 'Lopez ',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150208661',
        'name' => 'Pedro Santiago ',
        'last_name_p' => 'Castillo ',
        'last_name_m' => 'Pineda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82784268',
        'name' => 'Mario',
        'last_name_p' => 'Zurita',
        'last_name_m' => 'Rivas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012347953K',
        'name' => 'Jorge',
        'last_name_p' => 'Meza',
        'last_name_m' => 'Paz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150340829',
        'name' => 'Claudio',
        'last_name_p' => 'Serrano',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170200527',
        'name' => 'Angelo',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Aceituno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88733061',
        'name' => 'Renan Fernando',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Bravo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79965367',
        'name' => 'Oscar',
        'last_name_p' => 'Urrutia',
        'last_name_m' => 'Veliz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018908787K',
        'name' => 'DIEGO',
        'last_name_p' => 'ESPINOZA',
        'last_name_m' => 'RIVEROS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156906069',
        'name' => 'Mauricio Andres',
        'last_name_p' => 'Ossandon ',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106755248',
        'name' => 'Luis Alberto',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141121995',
        'name' => 'MAURICIO',
        'last_name_p' => 'ROA',
        'last_name_m' => 'CESPEDES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93179730',
        'name' => 'Roberto',
        'last_name_p' => 'Ariz',
        'last_name_m' => 'Pino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008197263K',
        'name' => 'SERGIO',
        'last_name_p' => 'COLOMA',
        'last_name_m' => 'SANHUESA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176142375',
        'name' => 'HUGO',
        'last_name_p' => 'RIQUELME',
        'last_name_m' => 'FUENTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173384882',
        'name' => 'italo',
        'last_name_p' => 'estay',
        'last_name_m' => 'licanqueo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187742684',
        'name' => 'maverick',
        'last_name_p' => 'Gajardo',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163087685',
        'name' => 'Patricio',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Godoy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '192012724',
        'name' => 'Juan',
        'last_name_p' => 'Cheuquepan',
        'last_name_m' => 'Cheuquepan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163523612',
        'name' => 'Daniel Alejandro',
        'last_name_p' => 'Escobar',
        'last_name_m' => 'Campillay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140304603',
        'name' => 'Hector Andres ',
        'last_name_p' => 'Mora ',
        'last_name_m' => 'Sanhueza ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159280764',
        'name' => 'Oscar',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Leiva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178450387',
        'name' => 'JUAN',
        'last_name_p' => 'GARRIDO',
        'last_name_m' => 'CISTERNA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118985222',
        'name' => 'CLAUDIO',
        'last_name_p' => 'CARDENAS ',
        'last_name_m' => 'SILVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '259755093',
        'name' => 'JOSETH',
        'last_name_p' => 'LEON',
        'last_name_m' => 'MOSQUERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141128442',
        'name' => 'Jose',
        'last_name_p' => 'Avalos',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126096917',
        'name' => 'Patricio',
        'last_name_p' => 'Pacaje',
        'last_name_m' => 'Chura',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159800245',
        'name' => 'Raul Andres ',
        'last_name_p' => 'Muñiz',
        'last_name_m' => 'Vilca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '005829845K',
        'name' => 'MANUEL',
        'last_name_p' => 'DOMINGUEZ',
        'last_name_m' => 'FUENZALIDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115138278',
        'name' => 'Victor Mauricio',
        'last_name_p' => 'Gallardo',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108281588',
        'name' => 'Carlos Roberto',
        'last_name_p' => 'Jimenez',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '199510622',
        'name' => 'PABLO',
        'last_name_p' => 'ESCALANTE',
        'last_name_m' => 'RIVERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161724246',
        'name' => 'PAULO',
        'last_name_p' => 'RETANAL',
        'last_name_m' => 'QUEZADA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191021495',
        'name' => 'MOISES',
        'last_name_p' => 'IGLESIAS',
        'last_name_m' => 'CASTILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '212317365',
        'name' => 'edwin',
        'last_name_p' => 'chullunquia',
        'last_name_m' => 'delgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170150937',
        'name' => 'SERGIO LUIS',
        'last_name_p' => 'MALDONADO',
        'last_name_m' => 'ROJAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75887663',
        'name' => 'Alfredo',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009205814K',
        'name' => 'Orlando',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Colombo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187932076',
        'name' => 'Wilson',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Astorga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132088713',
        'name' => 'oscar',
        'last_name_p' => 'cortes',
        'last_name_m' => 'cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89492645',
        'name' => 'Omar',
        'last_name_p' => 'Mamani',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156918237',
        'name' => 'Mario',
        'last_name_p' => 'Esquivel',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122168670',
        'name' => 'Juan Elias',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Pozo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154622810',
        'name' => 'ivan',
        'last_name_p' => 'de la vega',
        'last_name_m' => 'cedrian',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013618640K',
        'name' => 'Pedro Enrique',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '67560655',
        'name' => 'CARLOS',
        'last_name_p' => 'ULLOA',
        'last_name_m' => 'TRONCOSO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90642375',
        'name' => 'Juan Armando',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Fuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '64099604',
        'name' => 'Juan Jose',
        'last_name_p' => 'Mendez',
        'last_name_m' => 'Roman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132149305',
        'name' => 'Antonio',
        'last_name_p' => 'Peña',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '74329217',
        'name' => 'Gilberto',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91648989',
        'name' => 'Audito',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Fuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168691882',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Andrade',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104101879',
        'name' => 'Yuri',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Urbina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176749385',
        'name' => 'FRANCO',
        'last_name_p' => 'VILLARROEL',
        'last_name_m' => 'PINILLA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133676708',
        'name' => 'David Alejandro',
        'last_name_p' => 'Carrasco',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86468174',
        'name' => 'Miguel ',
        'last_name_p' => 'Montiel ',
        'last_name_m' => 'Oros',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180135936',
        'name' => 'Ricardo',
        'last_name_p' => 'Bravo',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125754031',
        'name' => 'Victor Hugo ',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Aravena ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82952527',
        'name' => 'Bernardo ',
        'last_name_p' => 'Sierra ',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104959911',
        'name' => 'Joel ',
        'last_name_p' => 'Constanzo',
        'last_name_m' => 'Trujillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126126751',
        'name' => 'Fernando',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Pinto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81733112',
        'name' => 'ERIC',
        'last_name_p' => 'ABALLAY',
        'last_name_m' => 'LOPEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014503275K',
        'name' => 'HECTOR',
        'last_name_p' => 'ULLOA',
        'last_name_m' => 'LOPEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114671584',
        'name' => 'Herman',
        'last_name_p' => 'Crisosto',
        'last_name_m' => 'Carvajal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183136607',
        'name' => 'Taibo Anai',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Sepulveda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135664251',
        'name' => 'JOSE ',
        'last_name_p' => 'RIQUELME',
        'last_name_m' => 'HERRERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135293725',
        'name' => 'Francisco Felix',
        'last_name_p' => 'Cuisa',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185082482',
        'name' => 'Gilson Ivan',
        'last_name_p' => 'Escobar',
        'last_name_m' => 'Pasten',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '023231642K',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Chuve',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191455940',
        'name' => 'Francisco Fidel',
        'last_name_p' => 'Cancino',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113767340',
        'name' => 'Cristian Alexis',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155618957',
        'name' => 'Julio Marcelino',
        'last_name_p' => 'Lepín',
        'last_name_m' => 'Guajardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '111821526',
        'name' => 'Hector',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Riquelme',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018918882K',
        'name' => 'Aliro',
        'last_name_p' => 'Godoy',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136385941',
        'name' => 'Jose',
        'last_name_p' => 'Ojeda',
        'last_name_m' => 'Garate',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '196604146',
        'name' => 'BRYAN',
        'last_name_p' => 'RIVERA',
        'last_name_m' => 'TABILO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190407977',
        'name' => 'Jordan',
        'last_name_p' => 'Ramos',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108273348',
        'name' => 'LIDO ITER',
        'last_name_p' => ' CORTES',
        'last_name_m' => ' GUZMAN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150157064',
        'name' => 'Alvaro',
        'last_name_p' => 'Godoy',
        'last_name_m' => 'Paz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009861222K',
        'name' => 'Pedro ',
        'last_name_p' => 'Ovalle ',
        'last_name_m' => 'González ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98481761',
        'name' => 'Carlos',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102362276',
        'name' => 'Manuel Antonio',
        'last_name_p' => 'Pasten ',
        'last_name_m' => 'Morgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138759342',
        'name' => 'Raul',
        'last_name_p' => 'Tejada',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013531322K',
        'name' => 'Carlos Alberto',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Acuña',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92525759',
        'name' => 'Victor Orlando',
        'last_name_p' => 'Landeros',
        'last_name_m' => 'Salinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142497506',
        'name' => 'Milton',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75399928',
        'name' => 'GUILLERMO',
        'last_name_p' => 'ALARCON',
        'last_name_m' => 'CARTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113699965',
        'name' => 'Luis Hernan',
        'last_name_p' => 'Adaos',
        'last_name_m' => 'Guajardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133565884',
        'name' => 'Francisco',
        'last_name_p' => 'Galarce',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116168022',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Minizaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130140327',
        'name' => 'Cristian',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'R',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '257748049',
        'name' => 'Juan ',
        'last_name_p' => 'Vega ',
        'last_name_m' => 'Hernández ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132194483',
        'name' => 'Gabriel Alejandro',
        'last_name_p' => 'Ferrer',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164362035',
        'name' => 'Cristofert Najari',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100943050',
        'name' => 'Hugo Humberto',
        'last_name_p' => 'Plaza',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174368686',
        'name' => 'Omar',
        'last_name_p' => 'Jeraldo',
        'last_name_m' => 'Sepulveda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121079526',
        'name' => 'ANGEL',
        'last_name_p' => 'ALVAREZ',
        'last_name_m' => 'ALVAREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166140684',
        'name' => 'LEONARDO',
        'last_name_p' => 'SOUNDY',
        'last_name_m' => 'GODOY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105809921',
        'name' => 'Patricio',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134399406',
        'name' => 'RODRIGO',
        'last_name_p' => 'LEYTON',
        'last_name_m' => 'BRIONES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163817985',
        'name' => 'Pablo Alexis',
        'last_name_p' => 'Lermanda',
        'last_name_m' => 'Curin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '259241499',
        'name' => 'OSCAR EDUARDO',
        'last_name_p' => 'TORRES',
        'last_name_m' => 'ALMEIDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181402202',
        'name' => 'SEBASTIAN',
        'last_name_p' => 'RIVERA',
        'last_name_m' => 'OLGUIN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '231777490',
        'name' => 'FELIPE',
        'last_name_p' => 'SINSAYA',
        'last_name_m' => 'HUARACA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '023216638K',
        'name' => 'Nelson',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Cruz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102132920',
        'name' => 'Eduardo',
        'last_name_p' => 'Saavedra',
        'last_name_m' => 'Godoy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150124905',
        'name' => 'Belfor',
        'last_name_p' => 'Piñones',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193961614',
        'name' => 'Kevin',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Berrios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138681939',
        'name' => 'Roberto Orlando',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Leiva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175285822',
        'name' => 'Camilo',
        'last_name_p' => 'Trigo',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016037764K',
        'name' => 'Jose',
        'last_name_p' => 'Arevalo',
        'last_name_m' => 'Zambrano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91828871',
        'name' => 'Alejandro Ulises',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Veliz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134201991',
        'name' => 'Juan Leo',
        'last_name_p' => 'Torrejon',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95122086',
        'name' => 'Jose Luis ',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Lagos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159242358',
        'name' => 'Fabian ',
        'last_name_p' => 'Castro ',
        'last_name_m' => 'Hidalgo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156799157',
        'name' => 'Pedro',
        'last_name_p' => 'Sepulveda ',
        'last_name_m' => 'Ocaranza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161351717',
        'name' => 'Jorge',
        'last_name_p' => 'Varela',
        'last_name_m' => 'Corona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '199182528',
        'name' => 'BRIAN',
        'last_name_p' => 'VASQUEZ',
        'last_name_m' => 'ULLOA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112031138',
        'name' => 'CRISTIAN',
        'last_name_p' => 'NUÑEZ',
        'last_name_m' => 'GONZALEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167832865',
        'name' => 'LUIS MIGUEL',
        'last_name_p' => 'MACHUCA',
        'last_name_m' => 'ROA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138682455',
        'name' => 'Ivan Marcelo',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169272077',
        'name' => 'CARLOS',
        'last_name_p' => 'FIGUEROA',
        'last_name_m' => 'CORTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151556477',
        'name' => 'Marcos Andres',
        'last_name_p' => 'Navarrete',
        'last_name_m' => 'Carreño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173886136',
        'name' => 'Antonio',
        'last_name_p' => 'Silva',
        'last_name_m' => 'Acosta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131804865',
        'name' => 'Angel',
        'last_name_p' => 'Valdivia',
        'last_name_m' => 'Pasten',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78381205',
        'name' => 'Patricio Alberto',
        'last_name_p' => 'Toro',
        'last_name_m' => 'Canihuante',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175362320',
        'name' => 'Christian Alexis',
        'last_name_p' => 'Saldaña',
        'last_name_m' => 'Cuello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89229294',
        'name' => 'Uber',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173635575',
        'name' => 'Michael John',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187928699',
        'name' => 'Bairon',
        'last_name_p' => 'Vivar',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82527281',
        'name' => 'Luis ',
        'last_name_p' => 'Ossandon ',
        'last_name_m' => 'Narria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122165302',
        'name' => 'Roger',
        'last_name_p' => 'Mary',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '243065577',
        'name' => 'Moises',
        'last_name_p' => 'Moscoso',
        'last_name_m' => 'Cespedes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167044255',
        'name' => 'Alejandro',
        'last_name_p' => 'Shee',
        'last_name_m' => 'Cuellar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164382303',
        'name' => 'Jorge',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Rubilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172054293',
        'name' => 'Angelo',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Zepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169274630',
        'name' => 'DIEGO',
        'last_name_p' => 'D´VORQUEZ',
        'last_name_m' => 'NUÑEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159752313',
        'name' => 'Pedro',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009235427K',
        'name' => 'Freddy Arturo',
        'last_name_p' => 'Peralta',
        'last_name_m' => 'Urtulla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134185740',
        'name' => 'JUAN ',
        'last_name_p' => 'RAMOS',
        'last_name_m' => 'LAGUNA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017092343K',
        'name' => 'Juan',
        'last_name_p' => 'Aymani',
        'last_name_m' => 'Aymani',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173903081',
        'name' => 'Jose',
        'last_name_p' => 'Cifuentes',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156853038',
        'name' => 'Israel Benjamin',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Condore',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176244828',
        'name' => 'Pablo Patricio',
        'last_name_p' => 'Botarro',
        'last_name_m' => 'Valdes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108713909',
        'name' => 'Roberto ',
        'last_name_p' => 'Mogro ',
        'last_name_m' => 'Sanhueza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161335673',
        'name' => 'Jonathan',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Gahona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158238152',
        'name' => 'Litet Alex',
        'last_name_p' => 'Uribe',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106636540',
        'name' => 'Patricio',
        'last_name_p' => 'Collao',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123972627',
        'name' => 'Salvador',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177566152',
        'name' => 'Felipe',
        'last_name_p' => 'Peña',
        'last_name_m' => 'Osses',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167058221',
        'name' => 'Francisco',
        'last_name_p' => 'Aguilar',
        'last_name_m' => 'Riquelme',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191007719',
        'name' => 'FELIPE LORENZO',
        'last_name_p' => 'VELIZ',
        'last_name_m' => 'MILLAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150176514',
        'name' => 'Nelson Andres',
        'last_name_p' => 'Sierra',
        'last_name_m' => 'Montiel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185086313',
        'name' => 'Jorge',
        'last_name_p' => 'Duran',
        'last_name_m' => 'Ormazabal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177705217',
        'name' => 'Octavio ',
        'last_name_p' => 'Sepulveda',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142938812',
        'name' => 'Jaime',
        'last_name_p' => 'Del Maure',
        'last_name_m' => 'Daure',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130113532',
        'name' => 'MAURICIO',
        'last_name_p' => 'DIAZ',
        'last_name_m' => 'CARRIZO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175283544',
        'name' => 'Jorge',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Zambrano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128440518',
        'name' => 'Jose',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Soza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183765396',
        'name' => 'JESUS',
        'last_name_p' => 'SAAVEDRA',
        'last_name_m' => 'SEPULVEDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141128035',
        'name' => 'Erwin',
        'last_name_p' => 'Espejo',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129459654',
        'name' => 'Carlos',
        'last_name_p' => 'Jofre',
        'last_name_m' => 'Cuellar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017431196K',
        'name' => 'Juan',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Maguida',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123951115',
        'name' => 'Robert',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015020495K',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Aros ',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008052806K',
        'name' => 'Wilfredo',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Salinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98201610',
        'name' => 'Jorge Armando',
        'last_name_p' => 'Tirado',
        'last_name_m' => 'Quiroz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '67411374',
        'name' => 'Sergio Daniel ',
        'last_name_p' => 'Ardiles ',
        'last_name_m' => 'Valdebenito ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011821000K',
        'name' => 'Patricio',
        'last_name_p' => 'Baricich',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '025183623K',
        'name' => 'DARIO',
        'last_name_p' => 'GALEANO',
        'last_name_m' => 'MELGAREJO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122164985',
        'name' => 'Sergio',
        'last_name_p' => 'Macaya',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182757802',
        'name' => 'CARLOS',
        'last_name_p' => 'VERDUGO',
        'last_name_m' => 'ACHA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98935738',
        'name' => 'Eduardo Cristian',
        'last_name_p' => 'Segaña',
        'last_name_m' => 'Guzman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120146696',
        'name' => 'Javier Gonzalo',
        'last_name_p' => 'Rebolledo',
        'last_name_m' => 'Sanhueza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '68331285',
        'name' => 'Eduardo Enrique',
        'last_name_p' => 'Codoceo',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170189868',
        'name' => 'Carlos Abrahan ',
        'last_name_p' => 'Rearte ',
        'last_name_m' => 'Campillay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160308958',
        'name' => 'Ricardo',
        'last_name_p' => 'Barros',
        'last_name_m' => 'Segovia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150478286',
        'name' => 'Julio Gabriel',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157410555',
        'name' => 'Roberto',
        'last_name_p' => 'Leiva',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174515255',
        'name' => 'Jorge',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166724031',
        'name' => 'Ronny',
        'last_name_p' => 'Candia',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016549086K',
        'name' => 'Patricio',
        'last_name_p' => 'Sierra',
        'last_name_m' => 'Montiel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '62609974',
        'name' => 'Hector Jose',
        'last_name_p' => 'Munoz',
        'last_name_m' => 'Hernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102478118',
        'name' => 'Freddy Del Carmen',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '65692309',
        'name' => 'Manuel',
        'last_name_p' => 'Rojo',
        'last_name_m' => 'Tirado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133668578',
        'name' => 'Carlos',
        'last_name_p' => 'Núñez',
        'last_name_m' => 'Llanca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150232953',
        'name' => 'Mario',
        'last_name_p' => 'Fuenzalida',
        'last_name_m' => 'Villalon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170202821',
        'name' => 'Patricio Antonio',
        'last_name_p' => 'Molina',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79978256',
        'name' => 'Victor',
        'last_name_p' => 'Garcia',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158119978',
        'name' => 'Jose',
        'last_name_p' => 'Peñailillo',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114944114',
        'name' => 'PEDRO',
        'last_name_p' => 'ASCENCIO',
        'last_name_m' => 'CASTRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134205695',
        'name' => 'Rodrigo',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128334114',
        'name' => 'Christian',
        'last_name_p' => 'Romero',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90795848',
        'name' => 'Cristian',
        'last_name_p' => 'Irarrazabal',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160322802',
        'name' => 'MARCIAL',
        'last_name_p' => 'NUÑEZ',
        'last_name_m' => 'GONZALEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171132088',
        'name' => 'Juan',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116163810',
        'name' => 'Javier',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Carvajal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89233828',
        'name' => 'Mario',
        'last_name_p' => 'Guiñez',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011444622K',
        'name' => 'Victor',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Toledo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91488752',
        'name' => 'Ivan',
        'last_name_p' => 'Barraza',
        'last_name_m' => 'Acuña',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182523151',
        'name' => 'Franco Andres ',
        'last_name_p' => 'Godoy',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174383634',
        'name' => 'Pablo ',
        'last_name_p' => 'Mesias',
        'last_name_m' => 'Guerra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016569578K',
        'name' => 'Alexis',
        'last_name_p' => 'Rievera',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136439626',
        'name' => 'Rodrigo',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Peñailillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108986379',
        'name' => 'Eduardo',
        'last_name_p' => 'Monsalve',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174381976',
        'name' => 'Rodrigo Javier',
        'last_name_p' => 'Fuentes',
        'last_name_m' => 'Peñaloza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '77874895',
        'name' => 'Julio',
        'last_name_p' => 'Ramos',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124418437',
        'name' => 'Eduardo Anselmo',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Labrin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170148576',
        'name' => 'Francisco Giovanni ',
        'last_name_p' => 'Trigo ',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100187183',
        'name' => 'Jose Alejandro',
        'last_name_p' => 'Lafaurie',
        'last_name_m' => 'De La Rosa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114676764',
        'name' => 'Henry',
        'last_name_p' => 'Escobar',
        'last_name_m' => 'Segovia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179686589',
        'name' => 'Maikoll',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Mallega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '225026629',
        'name' => 'Jorge',
        'last_name_p' => 'Guerra',
        'last_name_m' => 'Romero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129261595',
        'name' => 'Victor Hugo',
        'last_name_p' => 'Cuevas',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224504284',
        'name' => 'FIDEL',
        'last_name_p' => 'CASIANO',
        'last_name_m' => 'MURILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '219248679',
        'name' => 'Mario',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Cueva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '240690063',
        'name' => 'Phanor',
        'last_name_p' => 'Bolaos',
        'last_name_m' => 'Lozada',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009551359K',
        'name' => 'Jose',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Henriquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '217085195',
        'name' => 'walter',
        'last_name_p' => 'chamorro',
        'last_name_m' => 'salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143330818',
        'name' => 'JAIME',
        'last_name_p' => 'SEPULVEDA',
        'last_name_m' => 'EYZAGUIRRE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165495551',
        'name' => 'Paulo',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Pereira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132449848',
        'name' => 'JAVIER',
        'last_name_p' => 'PARRAGUEZ',
        'last_name_m' => 'MANRIQUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '243510937',
        'name' => 'ALDEMAR',
        'last_name_p' => 'BEDOYA',
        'last_name_m' => 'VILLALOBOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124419956',
        'name' => 'Dorian',
        'last_name_p' => 'Moreno',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135348392',
        'name' => 'Juan Patricio',
        'last_name_p' => 'Pastenes',
        'last_name_m' => 'Pastenes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122783936',
        'name' => 'Hector Pablo',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145373964',
        'name' => 'Mauricio',
        'last_name_p' => 'Palma',
        'last_name_m' => 'Castro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102169646',
        'name' => 'Jose',
        'last_name_p' => 'Agurto',
        'last_name_m' => 'Gaete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013014814K',
        'name' => 'Manuel Valentin',
        'last_name_p' => 'San Martin',
        'last_name_m' => 'Paredes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167058892',
        'name' => 'Francisco ',
        'last_name_p' => 'Piñones',
        'last_name_m' => 'Valdivia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144077997',
        'name' => 'Rodrigo',
        'last_name_p' => 'Mella',
        'last_name_m' => 'Bucarey',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109428876',
        'name' => 'Vicente Segundo',
        'last_name_p' => 'Villarroel',
        'last_name_m' => 'Quinteros',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107151400',
        'name' => 'Claudio',
        'last_name_p' => 'Andaur',
        'last_name_m' => 'Cisternas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145512158',
        'name' => 'Guilad',
        'last_name_p' => 'Loma',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134491744',
        'name' => 'Vladimir Eusebio',
        'last_name_p' => 'Orellana',
        'last_name_m' => 'Pinto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116150824',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127030987',
        'name' => 'Pedro',
        'last_name_p' => 'Jara',
        'last_name_m' => 'Vinet',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104270468',
        'name' => 'Dario',
        'last_name_p' => 'Correa',
        'last_name_m' => 'Hermosilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '74911366',
        'name' => 'Raul Segundo ',
        'last_name_p' => 'Videla ',
        'last_name_m' => 'Cortes ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159096661',
        'name' => 'Yerko',
        'last_name_p' => 'Villegas',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123472578',
        'name' => 'Juan',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141856669',
        'name' => 'FERNANDO',
        'last_name_p' => 'ESPINOZA',
        'last_name_m' => 'NEGRETE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136463098',
        'name' => 'Jimmy',
        'last_name_p' => 'Gallardo',
        'last_name_m' => 'Paredes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172597750',
        'name' => 'Yerko',
        'last_name_p' => 'Badilla',
        'last_name_m' => 'Salvo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102069145',
        'name' => 'Manuel ',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127830320',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Fuenzalida',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '019395877K',
        'name' => 'Maximiliano Alfonso',
        'last_name_p' => 'Malebran',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150253578',
        'name' => 'Cristian ',
        'last_name_p' => 'Velasquez',
        'last_name_m' => 'Marquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122892530',
        'name' => 'Hernan',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Cifuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86760894',
        'name' => 'Daniel',
        'last_name_p' => 'Campos',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018792958K',
        'name' => 'Humberto',
        'last_name_p' => 'Godoy',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134758708',
        'name' => 'Juan',
        'last_name_p' => 'Brandt',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132170541',
        'name' => 'Cristian Alejandro',
        'last_name_p' => 'Molina',
        'last_name_m' => 'Saez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98713921',
        'name' => 'Jaime Enrique',
        'last_name_p' => 'Ceballos',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008302335K',
        'name' => 'Johnny Patricio',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183985299',
        'name' => 'JUAN',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'ALCAYAGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177351385',
        'name' => 'MILTON',
        'last_name_p' => 'CORDERO',
        'last_name_m' => 'RIVERO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132875588',
        'name' => 'Rodrigo Antonio',
        'last_name_p' => 'Bobadilla',
        'last_name_m' => 'Rabanal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94418895',
        'name' => 'Nibaldo Moises',
        'last_name_p' => 'Miranda',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101125890',
        'name' => 'Luis',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '200328108',
        'name' => 'Sebastian',
        'last_name_p' => 'Peña',
        'last_name_m' => 'Beltran',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132197377',
        'name' => 'Carlos Enrique',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93079876',
        'name' => 'Hector',
        'last_name_p' => 'Poblete',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008019160K',
        'name' => 'Pedro',
        'last_name_p' => 'Falcon',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123979168',
        'name' => 'Rodrigo Hernan',
        'last_name_p' => 'Rivera ',
        'last_name_m' => 'Bruna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016704915K',
        'name' => 'MICHAEL',
        'last_name_p' => 'ZAMBRA',
        'last_name_m' => 'PEÑAILILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120893173',
        'name' => 'Andres ',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Troncoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '55652961',
        'name' => 'Aquiles Eduardo',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Vasquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117360768',
        'name' => 'Edwin Patricio',
        'last_name_p' => 'Villarroel',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '68114489',
        'name' => 'CARLOS',
        'last_name_p' => 'MATAMOROS',
        'last_name_m' => 'MUNIZAGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138696243',
        'name' => 'Jose Luis',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125259243',
        'name' => 'CESAR',
        'last_name_p' => 'SANHUEZA',
        'last_name_m' => 'ARAMBURU',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155208147',
        'name' => 'Patricio',
        'last_name_p' => 'Rojo',
        'last_name_m' => 'Basaez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014627790K',
        'name' => 'Sabino',
        'last_name_p' => 'Mamanchura',
        'last_name_m' => 'Cruz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169035016',
        'name' => 'Alexis',
        'last_name_p' => 'Alvarez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144514386',
        'name' => 'Eri',
        'last_name_p' => 'Fierro',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136462407',
        'name' => 'JUAN MANUEL',
        'last_name_p' => 'ASTUDILLO',
        'last_name_m' => 'RIOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173619529',
        'name' => 'Misael',
        'last_name_p' => 'Rojo',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108278595',
        'name' => 'Luis',
        'last_name_p' => 'Valenzuela',
        'last_name_m' => 'Aguilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128367942',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Oyarzun ',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179379244',
        'name' => 'Williams',
        'last_name_p' => 'Tabilo',
        'last_name_m' => 'Villegas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161667749',
        'name' => 'Jose',
        'last_name_p' => 'Hualla',
        'last_name_m' => 'Sandoval',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187920434',
        'name' => 'Francisco ',
        'last_name_p' => 'Tabilo ',
        'last_name_m' => 'Astudillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187935989',
        'name' => 'Giovanni',
        'last_name_p' => 'Chirino',
        'last_name_m' => 'Tabilo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115765574',
        'name' => 'SERGIO',
        'last_name_p' => 'VENEGAS',
        'last_name_m' => 'CUEVAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224743351',
        'name' => 'RUDY',
        'last_name_p' => 'HUANCHI',
        'last_name_m' => 'HUANCA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124425581',
        'name' => 'Daniel',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Apablaza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136431072',
        'name' => 'Alan Randy',
        'last_name_p' => 'Miranda',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164883361',
        'name' => 'Guillermo Leopoldo',
        'last_name_p' => 'Vivanco',
        'last_name_m' => 'Odger',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119578221',
        'name' => 'Wladimir',
        'last_name_p' => 'Cruces',
        'last_name_m' => 'Parada',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007606248K',
        'name' => 'Manuel',
        'last_name_p' => 'Robles',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93923928',
        'name' => 'Daniel',
        'last_name_p' => 'Urtubia',
        'last_name_m' => 'Navarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174328447',
        'name' => 'Alvaro',
        'last_name_p' => 'Leyton',
        'last_name_m' => 'Evans',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '197018674',
        'name' => 'Bryan',
        'last_name_p' => 'Novoa',
        'last_name_m' => 'Canihuante',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165666186',
        'name' => 'Francisco',
        'last_name_p' => 'Panire',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120301322',
        'name' => 'Roberto',
        'last_name_p' => 'Barra',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133132562',
        'name' => 'Victor Manuel ',
        'last_name_p' => 'Muñoz ',
        'last_name_m' => 'Bustos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011904166K',
        'name' => 'Juan ',
        'last_name_p' => 'Chavez',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133080015',
        'name' => 'Alex Fernando',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Olate',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161577006',
        'name' => 'Juan Andres',
        'last_name_p' => 'Arias',
        'last_name_m' => 'Aceiton',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138098869',
        'name' => 'Patricio',
        'last_name_p' => 'Arias',
        'last_name_m' => 'Canales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166010276',
        'name' => 'Victor',
        'last_name_p' => 'Quero',
        'last_name_m' => 'Vasquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184167948',
        'name' => 'Cristobal Humberto',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133093923',
        'name' => 'Claudio Mauricio',
        'last_name_p' => 'Brito ',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119009715',
        'name' => 'Cesar',
        'last_name_p' => 'Chavez',
        'last_name_m' => 'Calfuman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119596793',
        'name' => 'Sergio',
        'last_name_p' => 'Sandoval',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183482815',
        'name' => 'Hector Guillermo',
        'last_name_p' => 'Parra',
        'last_name_m' => 'Ortega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114959782',
        'name' => 'Miguel ',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150608600',
        'name' => 'Hernan',
        'last_name_p' => 'Maldonado',
        'last_name_m' => 'Ibarra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140662925',
        'name' => 'Oscar',
        'last_name_p' => 'Garrido',
        'last_name_m' => 'Yevenes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94581613',
        'name' => 'Luis',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175414959',
        'name' => 'Bryan Eugenio',
        'last_name_p' => 'Sanhueza',
        'last_name_m' => 'Cea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133830995',
        'name' => 'FREDY',
        'last_name_p' => 'LUNDIN',
        'last_name_m' => 'Bustos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '77220224',
        'name' => 'Carlos Eduardo',
        'last_name_p' => 'Conejero',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185002284',
        'name' => 'Ignacio',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Ibarra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135120936',
        'name' => 'Diego Alejandro',
        'last_name_p' => 'Antinao',
        'last_name_m' => 'Leal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119868912',
        'name' => 'Marco',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Peña',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167993907',
        'name' => 'Marlon',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124400848',
        'name' => 'Claudio',
        'last_name_p' => 'Munoz',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118202406',
        'name' => 'Victor',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118173481',
        'name' => 'Roberto',
        'last_name_p' => 'Miranda',
        'last_name_m' => 'Eyzaguirre',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143076989',
        'name' => 'Rodrigo',
        'last_name_p' => 'Silva',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81874271',
        'name' => 'Wilson',
        'last_name_p' => 'Colque',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102685814',
        'name' => 'Hernan Remigio',
        'last_name_p' => 'Porma',
        'last_name_m' => 'Cayuqueo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102356462',
        'name' => 'Carlos',
        'last_name_p' => 'Cid',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164382184',
        'name' => 'Jorge ',
        'last_name_p' => 'Taborga ',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162451960',
        'name' => 'Nayn Libio',
        'last_name_p' => 'Armijo',
        'last_name_m' => 'Leon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016930744K',
        'name' => 'Sergio',
        'last_name_p' => 'Huenchuman',
        'last_name_m' => 'Saez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86342235',
        'name' => 'Juan Ernesto ',
        'last_name_p' => 'Saez',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122197999',
        'name' => 'Hector',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Vera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164354423',
        'name' => 'Carlos',
        'last_name_p' => 'Vallejos',
        'last_name_m' => 'Michea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95120210',
        'name' => 'Patricio',
        'last_name_p' => 'Ramos',
        'last_name_m' => 'Ardiles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '87514005',
        'name' => 'SERGIO MARIO',
        'last_name_p' => 'PARADA',
        'last_name_m' => 'ROMAN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167050042',
        'name' => 'Yermayn',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113337362',
        'name' => 'JUAN',
        'last_name_p' => 'HIDALGO',
        'last_name_m' => 'MARAMBIO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185063607',
        'name' => 'Yanina',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Reinoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '243253454',
        'name' => 'Osmar Vladimir',
        'last_name_p' => 'Valeriano',
        'last_name_m' => 'Zuna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167333680',
        'name' => 'Alejandro Axequiel ',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Paez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141102303',
        'name' => 'Luis ',
        'last_name_p' => 'Adrian ',
        'last_name_m' => 'Pérez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180140875',
        'name' => 'Kevin',
        'last_name_p' => 'Alamo',
        'last_name_m' => 'Herrera ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174378029',
        'name' => 'Samuel Cristian ',
        'last_name_p' => 'Espinoza ',
        'last_name_m' => 'Markleingle ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114563110',
        'name' => 'Carlos ',
        'last_name_p' => 'Pacheco ',
        'last_name_m' => 'Gajardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98530320',
        'name' => 'Manuel',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157431099',
        'name' => 'Carlos',
        'last_name_p' => 'Huenchumán',
        'last_name_m' => 'Sáez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '149009507',
        'name' => 'JUAN',
        'last_name_p' => 'FUENTES',
        'last_name_m' => 'FUENTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119509971',
        'name' => 'Eusebio  Rigoberto',
        'last_name_p' => 'Cofre ',
        'last_name_m' => 'Lizana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180064125',
        'name' => 'Michael',
        'last_name_p' => 'Inostroza',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102839099',
        'name' => 'MARCO',
        'last_name_p' => 'MESIAS',
        'last_name_m' => 'MORALES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91901927',
        'name' => 'Mario',
        'last_name_p' => 'Bermudez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183117696',
        'name' => 'Samuel Elias',
        'last_name_p' => 'Santana',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107742263',
        'name' => 'Aurelio Segundo',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181110031',
        'name' => 'CESAR',
        'last_name_p' => 'MENDOZA',
        'last_name_m' => 'BUSTOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016807462K',
        'name' => 'ANIBAL',
        'last_name_p' => 'VILLAR',
        'last_name_m' => 'VERGARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '194686358',
        'name' => 'Jean',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Luna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139941020',
        'name' => 'Williams ',
        'last_name_p' => 'Atenas',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187930766',
        'name' => 'Jansser Andres ',
        'last_name_p' => 'Rojas ',
        'last_name_m' => 'Diaz ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119358256',
        'name' => 'Ernesto Cristian',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146500293',
        'name' => 'Albert',
        'last_name_p' => 'Polacci',
        'last_name_m' => 'Polacci',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108369523',
        'name' => 'Jorge Enrique',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Carcamo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '196921036',
        'name' => 'SERGIO',
        'last_name_p' => 'SAA',
        'last_name_m' => 'DELGADO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '202603548',
        'name' => 'Alexsander',
        'last_name_p' => 'Kurijara',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104531318',
        'name' => 'Cristian',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Requena',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '191554809',
        'name' => 'IGNACIO',
        'last_name_p' => 'GAJARDO',
        'last_name_m' => 'RIOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185209946',
        'name' => 'CARLOS',
        'last_name_p' => 'SERRANO',
        'last_name_m' => 'RODRIGUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '67972791',
        'name' => 'Eugenio',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151700691',
        'name' => 'Luis Eliecer',
        'last_name_p' => 'Ceballos',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185682234',
        'name' => 'Luis Jiler',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173707568',
        'name' => 'MAKARENA FERNANDA',
        'last_name_p' => 'WUTH',
        'last_name_m' => 'ZAPATA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158120798',
        'name' => 'HUGO',
        'last_name_p' => 'CEJAS',
        'last_name_m' => 'DURAN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '201264723',
        'name' => 'NIKOL',
        'last_name_p' => 'RUBIO',
        'last_name_m' => 'CONTRERAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015826563K',
        'name' => 'Yanko Antonio',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'O´Ryan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126141580',
        'name' => 'Henry Albert',
        'last_name_p' => 'Nuñez',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174354804',
        'name' => 'Fernando Javier',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167033245',
        'name' => 'Vanessa',
        'last_name_p' => 'Marin ',
        'last_name_m' => 'Carcamo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167054390',
        'name' => 'Juan',
        'last_name_p' => 'Guerrero',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188695167',
        'name' => 'ALAN',
        'last_name_p' => 'BURROWS',
        'last_name_m' => 'LUQUE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138698920',
        'name' => 'Jorge  Raul',
        'last_name_p' => 'Catalan',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173887671',
        'name' => 'Elias',
        'last_name_p' => 'Espinosa',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181593741',
        'name' => 'Mauro',
        'last_name_p' => 'Rodas',
        'last_name_m' => 'Vives',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158858886',
        'name' => 'Marcelo',
        'last_name_p' => 'Paez',
        'last_name_m' => 'Poblete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173038275',
        'name' => 'Felipe',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Pezoa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180116672',
        'name' => 'Alonso Antonio',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161356409',
        'name' => 'Oscar Eduardo',
        'last_name_p' => 'Angel',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125240712',
        'name' => 'Claudio',
        'last_name_p' => 'Zurita',
        'last_name_m' => 'Vasquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170211146',
        'name' => 'Nataly',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118604156',
        'name' => 'Hector',
        'last_name_p' => 'Flores',
        'last_name_m' => 'San Juan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92461319',
        'name' => 'Marco',
        'last_name_p' => 'Reyes',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136462938',
        'name' => 'Marco Antonio',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156470422',
        'name' => 'Erick Mauricio',
        'last_name_p' => 'Riquelme',
        'last_name_m' => 'Rubilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160771836',
        'name' => 'Sergio',
        'last_name_p' => 'Ortega',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93450248',
        'name' => 'ALEJANDRO ',
        'last_name_p' => 'CARVAJAL',
        'last_name_m' => 'VEGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79948365',
        'name' => 'Robinson ',
        'last_name_p' => 'Urrutia',
        'last_name_m' => 'Rivera ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138680592',
        'name' => 'JULIO',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'GONZALEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120801791',
        'name' => 'MARCO',
        'last_name_p' => 'MOLINA',
        'last_name_m' => 'LEAL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113785454',
        'name' => 'Williams Walter',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105736339',
        'name' => 'Richard Marcelo',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '238138264',
        'name' => 'Rafael Marcelino',
        'last_name_p' => 'Almiron',
        'last_name_m' => 'Ehui',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93208366',
        'name' => 'Arturo',
        'last_name_p' => 'Mundaca',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136418785',
        'name' => 'Cristian',
        'last_name_p' => 'Fernandez',
        'last_name_m' => 'Blanco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163561921',
        'name' => 'DAVID IGNACIO',
        'last_name_p' => 'CARVAJAL',
        'last_name_m' => 'PINTO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156839396',
        'name' => 'Richard',
        'last_name_p' => 'Madrid ',
        'last_name_m' => 'Bazaes ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167034551',
        'name' => 'Franko',
        'last_name_p' => 'Villarroel',
        'last_name_m' => 'Roa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '99271531',
        'name' => 'Ricardo',
        'last_name_p' => 'Chavez',
        'last_name_m' => 'Angulo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011196999K',
        'name' => 'Dean',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Garriga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75603002',
        'name' => 'Pedro',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Maya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144448057',
        'name' => 'JAYRE',
        'last_name_p' => 'CARVAJAL',
        'last_name_m' => 'CASTRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124070929',
        'name' => 'Francisco Rodrigo',
        'last_name_p' => 'Daforno',
        'last_name_m' => 'Barahona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '245996810',
        'name' => 'Julian',
        'last_name_p' => 'Tinta',
        'last_name_m' => 'Torrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90215892',
        'name' => 'LUIS FERNANDO',
        'last_name_p' => 'HERRERA',
        'last_name_m' => 'CAMPILLAY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113593415',
        'name' => 'Vitaliano',
        'last_name_p' => 'Vicencio',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117360458',
        'name' => 'ADOLFO SANTIAGO',
        'last_name_p' => 'MARQUEZ',
        'last_name_m' => 'SALINAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '256434210',
        'name' => 'Alejandro ',
        'last_name_p' => 'Carpio ',
        'last_name_m' => 'Espejo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '103457750',
        'name' => 'David Martin',
        'last_name_p' => 'Cerpa',
        'last_name_m' => 'Garay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013985523K',
        'name' => 'Francisco Fabian',
        'last_name_p' => 'Papagallo',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175048391',
        'name' => 'José Luis',
        'last_name_p' => 'Pardo',
        'last_name_m' => 'Galvez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172494749',
        'name' => 'Eduardo Antonio',
        'last_name_p' => 'Arellano',
        'last_name_m' => 'Gallegos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129244585',
        'name' => 'Raul',
        'last_name_p' => 'Carrasco',
        'last_name_m' => 'Cifuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163134187',
        'name' => 'Guillermo Elias',
        'last_name_p' => 'Calderon',
        'last_name_m' => 'Plaza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018283601K',
        'name' => 'Guillermo Ignacio ',
        'last_name_p' => 'Corona ',
        'last_name_m' => 'Vásquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133850163',
        'name' => 'Ivan',
        'last_name_p' => 'Cuevas',
        'last_name_m' => 'Poblete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176867914',
        'name' => 'Julio',
        'last_name_p' => 'Novoa',
        'last_name_m' => 'Grandon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128326448',
        'name' => 'Juan Pablo',
        'last_name_p' => 'Cerpa',
        'last_name_m' => 'Garay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010221210K',
        'name' => 'Carlos Antonio',
        'last_name_p' => 'Mora',
        'last_name_m' => 'Retamal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146822274',
        'name' => 'Hermann',
        'last_name_p' => 'Guerra',
        'last_name_m' => 'Tabori',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181993324',
        'name' => 'Diego',
        'last_name_p' => 'Troncoso',
        'last_name_m' => 'Troncoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '237738306',
        'name' => 'FRANCIS',
        'last_name_p' => 'SANCHEZ',
        'last_name_m' => 'BERROCAL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80255659',
        'name' => 'Jose',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Bravo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '253404566',
        'name' => 'JORGE LUIS',
        'last_name_p' => 'GIRALDO',
        'last_name_m' => 'VELASQUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105736304',
        'name' => 'Juan',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105736290',
        'name' => 'Wilson',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137439107',
        'name' => 'WALTER GERARDO',
        'last_name_p' => 'GUERRERO',
        'last_name_m' => 'BARRERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163049201',
        'name' => 'juan',
        'last_name_p' => 'sepulveda',
        'last_name_m' => 'j',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162833901',
        'name' => 'ALVARO',
        'last_name_p' => 'SAEZ',
        'last_name_m' => 'NAVARRETE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183887548',
        'name' => 'Ramiro',
        'last_name_p' => ' Bustos',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120567950',
        'name' => 'JOSE',
        'last_name_p' => 'AEDO',
        'last_name_m' => 'JARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017372800K',
        'name' => 'ANGELO ',
        'last_name_p' => 'YAÑEZ',
        'last_name_m' => 'GUTIERREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137273888',
        'name' => 'Cristian Alonso',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106008922',
        'name' => 'fraulino',
        'last_name_p' => 'castro',
        'last_name_m' => 'mella',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157336665',
        'name' => 'rene',
        'last_name_p' => 'pasten',
        'last_name_m' => 'pasten',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014190065K',
        'name' => 'Cristian Roberto Alejandro',
        'last_name_p' => 'Madrid',
        'last_name_m' => 'Bastias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193417647',
        'name' => 'diego',
        'last_name_p' => 'flores',
        'last_name_m' => 'retamal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159052036',
        'name' => 'Francesco Maximiliano',
        'last_name_p' => 'Godoy ',
        'last_name_m' => 'Avalos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129481528',
        'name' => 'Leonel Alonso',
        'last_name_p' => 'Soto',
        'last_name_m' => 'Mansilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160900458',
        'name' => 'Mauricio Antonio',
        'last_name_p' => 'Valenzuela',
        'last_name_m' => 'Bernal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015210636K',
        'name' => 'Jose',
        'last_name_p' => 'Mora',
        'last_name_m' => 'Pereira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '189860773',
        'name' => 'Jordan Esteban ',
        'last_name_p' => 'Olivares ',
        'last_name_m' => 'Jimenez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127104697',
        'name' => 'Pedro Rodolfo',
        'last_name_p' => 'Camilo',
        'last_name_m' => 'Rivas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168828772',
        'name' => 'Ramon Enrique ',
        'last_name_p' => 'Toro',
        'last_name_m' => 'Madariaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159946495',
        'name' => 'Carlos Patricio',
        'last_name_p' => 'Trujillo',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102204808',
        'name' => 'Marcelo Fernando',
        'last_name_p' => 'Cerda',
        'last_name_m' => 'Oses',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181203412',
        'name' => 'Jose Fernando',
        'last_name_p' => 'Cerda',
        'last_name_m' => 'Gallegos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143732754',
        'name' => 'Mauricio',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Zapata',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102261569',
        'name' => 'Jose Ulises',
        'last_name_p' => 'Montencinos',
        'last_name_m' => 'Lira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121076993',
        'name' => 'Marcial Andres',
        'last_name_p' => 'Nuñez ',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131746970',
        'name' => 'Hugo',
        'last_name_p' => 'Escobar',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178945947',
        'name' => 'Hernán Efraín',
        'last_name_p' => 'Lincopi',
        'last_name_m' => 'Lincopi',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '192325846',
        'name' => 'Victor Manuel ',
        'last_name_p' => 'Infante ',
        'last_name_m' => 'Contreras ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015018326K',
        'name' => 'HERMAN',
        'last_name_p' => 'HUAYLLA',
        'last_name_m' => 'CUMALY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '103896053',
        'name' => 'Ramon',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '85349732',
        'name' => 'Tolentino',
        'last_name_p' => 'Mamani',
        'last_name_m' => 'Villca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182573698',
        'name' => 'David',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014467040K',
        'name' => 'Juan',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '226454667',
        'name' => 'Jose Rosario',
        'last_name_p' => 'Huallpa',
        'last_name_m' => 'Quille',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182328480',
        'name' => 'Marcos Raul',
        'last_name_p' => 'Salinas',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117220621',
        'name' => 'Oscar',
        'last_name_p' => 'Salazar',
        'last_name_m' => 'Apablaza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143917312',
        'name' => 'Fredy Moises',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104928099',
        'name' => 'Oscar',
        'last_name_p' => 'Choque',
        'last_name_m' => 'Copa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '192052416',
        'name' => 'Esteban',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Albanez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '194631464',
        'name' => 'Juan',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105684703',
        'name' => 'Ivan',
        'last_name_p' => 'Leviqueo',
        'last_name_m' => 'Marileo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123954696',
        'name' => 'Carlos',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155147822',
        'name' => 'CRISTIAN ALEJANDRO',
        'last_name_p' => 'ESCOBAR',
        'last_name_m' => 'ARACENA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188992005',
        'name' => 'Esteban',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112032916',
        'name' => 'GUILLERMO ANTONIO',
        'last_name_p' => 'BERRIOS',
        'last_name_m' => 'OSSANDON',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '198675938',
        'name' => 'JENIFER LASTENIA',
        'last_name_p' => 'GAVIÑO',
        'last_name_m' => 'MARIN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150152607',
        'name' => 'ANA',
        'last_name_p' => 'ESCOBAR',
        'last_name_m' => 'ECHEVERRIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125694896',
        'name' => 'Angelica Veronica',
        'last_name_p' => 'Puebla',
        'last_name_m' => 'Labarca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93787609',
        'name' => 'Mario',
        'last_name_p' => 'Cofré',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '83932759',
        'name' => 'Lindor',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135355410',
        'name' => 'Jorge',
        'last_name_p' => 'Paez',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138712850',
        'name' => 'JORGE',
        'last_name_p' => 'LOPEZ',
        'last_name_m' => 'LAZCANO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167714986',
        'name' => 'JOSE LUIS',
        'last_name_p' => 'BUGEÑO',
        'last_name_m' => 'CAMPOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185073068',
        'name' => 'Yerson',
        'last_name_p' => 'Quintanilla',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108974079',
        'name' => 'Antonio Orlando',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139616839',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Pereda',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107689982',
        'name' => 'Marcelo',
        'last_name_p' => 'Mesias',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166723507',
        'name' => 'Michael Alejandro',
        'last_name_p' => 'Mercado',
        'last_name_m' => 'Olmedo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117647315',
        'name' => 'Alejandro',
        'last_name_p' => 'Loyola',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121604086',
        'name' => 'Cesar',
        'last_name_p' => 'Goldsworthy',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011219696K',
        'name' => 'LUIS',
        'last_name_p' => 'PONCE',
        'last_name_m' => 'PASTEN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106284148',
        'name' => 'juan',
        'last_name_p' => 'duran',
        'last_name_m' => 'rebolledo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104789129',
        'name' => 'Eduardo',
        'last_name_p' => 'Diaz',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132165521',
        'name' => 'Carlos',
        'last_name_p' => 'Sepulveda',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162590502',
        'name' => 'Ruben',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Quispe',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165663055',
        'name' => 'Jorge ',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Quispe',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156917206',
        'name' => 'Diego',
        'last_name_p' => 'Perez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89837286',
        'name' => 'Juan',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Valdes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010741763K',
        'name' => 'Frank',
        'last_name_p' => 'Paz',
        'last_name_m' => 'Orellana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133767770',
        'name' => 'Francisco',
        'last_name_p' => 'Carrera',
        'last_name_m' => 'Ovalle',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86790106',
        'name' => 'Daniel',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '237066154',
        'name' => 'Pablo ',
        'last_name_p' => 'Moreira',
        'last_name_m' => 'Porco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104696686',
        'name' => 'Axel Amable',
        'last_name_p' => 'Santander',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '87268047',
        'name' => 'Sergio',
        'last_name_p' => 'Paez',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128364226',
        'name' => 'Marcos',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Briceño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136336215',
        'name' => 'Rebeca Alejandra',
        'last_name_p' => 'Corante ',
        'last_name_m' => 'Campillay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '189228732',
        'name' => 'Jesus',
        'last_name_p' => 'Briceño',
        'last_name_m' => 'Aros',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174364524',
        'name' => 'José David',
        'last_name_p' => 'Yáñez',
        'last_name_m' => 'Bahamondes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016515696K',
        'name' => 'Jonathan ',
        'last_name_p' => 'Alarcón',
        'last_name_m' => 'Jara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193989330',
        'name' => 'samuel andres',
        'last_name_p' => 'seron',
        'last_name_m' => 'rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150140455',
        'name' => 'Rodolfo',
        'last_name_p' => 'Ossandon',
        'last_name_m' => 'Tordoya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125819869',
        'name' => 'Yerko Bautista ',
        'last_name_p' => 'Ocayo ',
        'last_name_m' => 'Barraza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94454298',
        'name' => 'Marco',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Arias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156849847',
        'name' => 'Angel David',
        'last_name_p' => 'Cepeda',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163501120',
        'name' => 'Mario Enrique ',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Pino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130578071',
        'name' => 'Cesar Antonio ',
        'last_name_p' => 'Lillo',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95637574',
        'name' => 'Julio',
        'last_name_p' => 'Saavedra',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79578061',
        'name' => 'CARLOS ENRIQUE',
        'last_name_p' => 'OLIVARES',
        'last_name_m' => 'PASTEN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135418161',
        'name' => 'Juan Alberto',
        'last_name_p' => 'Perez ',
        'last_name_m' => 'Neira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125103308',
        'name' => 'Carlos Agustin ',
        'last_name_p' => 'Quintanilla',
        'last_name_m' => 'Bastidas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94426715',
        'name' => 'Hector',
        'last_name_p' => 'Jara',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119643813',
        'name' => 'RICHARD ALBERTO',
        'last_name_p' => 'CRUZAT ',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162603043',
        'name' => 'Jose Manuel',
        'last_name_p' => 'Avalos',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128235906',
        'name' => 'Javier Alejandro',
        'last_name_p' => 'Soto ',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136430718',
        'name' => 'Rodolfo',
        'last_name_p' => 'Gomez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84434167',
        'name' => 'Lino Fernando',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136010840',
        'name' => 'Hugo',
        'last_name_p' => 'Alvarado',
        'last_name_m' => 'Sanchez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136432362',
        'name' => 'Pablo ',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Pulgar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017489339K',
        'name' => 'Antonino Fabian',
        'last_name_p' => 'Zamora',
        'last_name_m' => 'Ugarte',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176555343',
        'name' => 'Michael',
        'last_name_p' => 'Neira',
        'last_name_m' => 'Barraza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167057993',
        'name' => 'DARIO ALEXANDER',
        'last_name_p' => 'RIOS',
        'last_name_m' => 'GUERRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128344179',
        'name' => 'Paulo Ricardo',
        'last_name_p' => 'Francino',
        'last_name_m' => 'Francino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156582395',
        'name' => 'Cristian Andres',
        'last_name_p' => 'Villa',
        'last_name_m' => 'Inostroza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008750767K',
        'name' => 'Roberto',
        'last_name_p' => 'Ojeda',
        'last_name_m' => 'Mella',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159244687',
        'name' => 'Jose ',
        'last_name_p' => 'Valdes',
        'last_name_m' => 'Fuenzalida',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146051952',
        'name' => 'Juan',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Barahona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142573911',
        'name' => 'Jose Alberto',
        'last_name_p' => 'Painecura',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177422282',
        'name' => 'Patricio ',
        'last_name_p' => 'Vivar',
        'last_name_m' => 'Arriagada',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169272026',
        'name' => 'ALANN PATRICIO',
        'last_name_p' => 'VERA',
        'last_name_m' => 'GALLEGUILLOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106876061',
        'name' => 'Jaime Alejandro',
        'last_name_p' => 'Medina',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016785172K',
        'name' => 'Damian',
        'last_name_p' => 'Videla',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016891783K',
        'name' => 'LUIS',
        'last_name_p' => 'CAMPUSANO',
        'last_name_m' => 'PIZARRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113261218',
        'name' => 'John',
        'last_name_p' => 'Arispe',
        'last_name_m' => 'Arispe',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80247397',
        'name' => 'SALVADOR RODRIGO',
        'last_name_p' => 'AGUILERA',
        'last_name_m' => 'NUÑEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187741726',
        'name' => 'SEBASTIAN JESUS',
        'last_name_p' => 'SANCHEZ',
        'last_name_m' => 'SUAZO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164684539',
        'name' => 'ANDRES ISAIAS',
        'last_name_p' => 'TASSARA',
        'last_name_m' => 'CARCARMO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '238099978',
        'name' => 'AMADEO',
        'last_name_p' => 'QUIROGA ',
        'last_name_m' => 'FLORES ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175540970',
        'name' => 'FERNANDO ANDRES',
        'last_name_p' => 'RADA',
        'last_name_m' => 'CARMONA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90818473',
        'name' => 'PEDRO MANUEL',
        'last_name_p' => 'RAMIREZ',
        'last_name_m' => 'PLAZA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183417444',
        'name' => 'Sebastian Camilo',
        'last_name_p' => 'Pinto',
        'last_name_m' => 'Riquelme',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95101127',
        'name' => 'Ivan Ramon',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150370094',
        'name' => 'Cristian Luis',
        'last_name_p' => 'Riveros',
        'last_name_m' => 'Farias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '96858027',
        'name' => 'EDUARDO ',
        'last_name_p' => 'DIAZ',
        'last_name_m' => 'villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157694871',
        'name' => 'Pedro',
        'last_name_p' => 'Vargas',
        'last_name_m' => 'Ulloa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108243538',
        'name' => 'HERNAN ',
        'last_name_p' => 'TAPIA',
        'last_name_m' => 'NAVIA ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176564008',
        'name' => 'Jordan Robert ',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Cepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018013557K',
        'name' => 'ALVARO',
        'last_name_p' => 'ARRIAGADA',
        'last_name_m' => 'SILVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158257904',
        'name' => 'GONZALO',
        'last_name_p' => 'ARANCIBIA',
        'last_name_m' => 'CARVALLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009953205K',
        'name' => 'Jorge ',
        'last_name_p' => 'Alarcon ',
        'last_name_m' => 'Campusano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114708925',
        'name' => 'HECTOR',
        'last_name_p' => 'BRICEÑO',
        'last_name_m' => 'DIAZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131800606',
        'name' => 'Claudio',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Velasquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141115707',
        'name' => 'Robert',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Bolados',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163497379',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Day',
        'last_name_m' => 'Ardiles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '225583943',
        'name' => 'Anacleto ',
        'last_name_p' => 'Pacheco ',
        'last_name_m' => 'Marce ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '68368855',
        'name' => 'Carlos Ulises',
        'last_name_p' => 'Elgueta',
        'last_name_m' => 'Matamala',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79864951',
        'name' => 'Leonel',
        'last_name_p' => 'Ulloa',
        'last_name_m' => 'Merino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145642442',
        'name' => 'Hans Clive',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Echague',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160576367',
        'name' => 'Juan Manuel',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Navarrete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124236851',
        'name' => 'Felipe',
        'last_name_p' => 'Condori',
        'last_name_m' => 'Condori',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159757897',
        'name' => 'Andres Jared',
        'last_name_p' => 'Estay',
        'last_name_m' => ' Hernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '212237043',
        'name' => 'Patricio',
        'last_name_p' => 'Ibaceta',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120867164',
        'name' => 'Eduardo Guillermo',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168666616',
        'name' => 'Leonel',
        'last_name_p' => 'Flres',
        'last_name_m' => 'Mamani',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155750650',
        'name' => 'Edgardo',
        'last_name_p' => 'Alcaya',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138671348',
        'name' => 'Jorge Luis',
        'last_name_p' => 'Cesped',
        'last_name_m' => 'Bunster',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016770249K',
        'name' => 'Sergio',
        'last_name_p' => 'Escudero',
        'last_name_m' => 'Patino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94314836',
        'name' => 'Claudio',
        'last_name_p' => 'Barrientos',
        'last_name_m' => 'Barrientos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '262901831',
        'name' => 'Martin',
        'last_name_p' => 'zeballos',
        'last_name_m' => 'mendoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89306493',
        'name' => 'Ramon',
        'last_name_p' => 'Reyes',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156830003',
        'name' => 'JORGE',
        'last_name_p' => 'ZUÑIGA ',
        'last_name_m' => 'SOTO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108807806',
        'name' => 'Mariano',
        'last_name_p' => 'Lepe',
        'last_name_m' => 'Rebolledo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107435816',
        'name' => 'Juan Guillermo',
        'last_name_p' => 'Belmar',
        'last_name_m' => 'Vilugron',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86719673',
        'name' => 'Patricio ',
        'last_name_p' => 'Bugueño ',
        'last_name_m' => 'Salazar ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '022464387K',
        'name' => 'edgar hernan',
        'last_name_p' => 'rodriguez',
        'last_name_m' => 'hinojosa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '152305370',
        'name' => 'PATRICIO',
        'last_name_p' => 'MAASS',
        'last_name_m' => 'VERGARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127834954',
        'name' => 'FRANCISCO ANTONIO',
        'last_name_p' => 'ARELLANO',
        'last_name_m' => 'DIAZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129761695',
        'name' => 'MANLIO IGNACIO',
        'last_name_p' => 'FIGUEROA',
        'last_name_m' => 'DIAZ ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82792295',
        'name' => 'PASCUAL ',
        'last_name_p' => 'RAMOS',
        'last_name_m' => 'ALZAMORA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181834803',
        'name' => 'MARCOS',
        'last_name_p' => 'RODRIGUEZ',
        'last_name_m' => 'CHELMES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109346411',
        'name' => 'VICTOR ',
        'last_name_p' => 'VELOZO',
        'last_name_m' => 'NOVOA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016054791K',
        'name' => 'Miguel Angel',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Tebes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '99165847',
        'name' => 'Mario',
        'last_name_p' => 'Moreno ',
        'last_name_m' => 'Zepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107849440',
        'name' => 'Jose',
        'last_name_p' => 'Huanel',
        'last_name_m' => 'Huirimilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127689164',
        'name' => 'Patricio',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Pacheco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137529580',
        'name' => 'LEONARDO',
        'last_name_p' => 'RAMOS',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114960438',
        'name' => 'Rodrigo',
        'last_name_p' => 'Quiroz',
        'last_name_m' => 'Moya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135138681',
        'name' => 'CARLOS ',
        'last_name_p' => 'RIFFO',
        'last_name_m' => 'JARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104769861',
        'name' => 'Claudio',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150035627',
        'name' => 'Jonathan',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '85275267',
        'name' => 'Guillermo',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162033808',
        'name' => 'Juan ',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185245675',
        'name' => 'ROBERTO CARLOS',
        'last_name_p' => 'HERRERA',
        'last_name_m' => 'ROA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144380533',
        'name' => 'CARLOS JULIAN',
        'last_name_p' => 'FIGUEROA',
        'last_name_m' => 'DIAZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162257072',
        'name' => 'Rodrigo',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Quezada',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133101225',
        'name' => 'claudio andres ',
        'last_name_p' => 'madina',
        'last_name_m' => 'toledo ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179687895',
        'name' => 'Christopher',
        'last_name_p' => 'Jofre',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134221046',
        'name' => 'Antonio',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Zepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121886057',
        'name' => 'luis enrique',
        'last_name_p' => 'inostroza',
        'last_name_m' => 'cereceda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162846442',
        'name' => 'luis carlos andres',
        'last_name_p' => 'riquelme',
        'last_name_m' => 'figueroa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92570576',
        'name' => 'Carlos Enrique',
        'last_name_p' => 'Navarro',
        'last_name_m' => 'Cisterna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112159568',
        'name' => 'Alvaro Hernan',
        'last_name_p' => 'Jorquera',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150149371',
        'name' => 'Abner',
        'last_name_p' => 'Portales',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173933568',
        'name' => 'Deny Samuel',
        'last_name_p' => 'Silvestre',
        'last_name_m' => 'Tirado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95538312',
        'name' => 'Mario',
        'last_name_p' => 'Garrido',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170205464',
        'name' => 'Jorge',
        'last_name_p' => 'Tirado',
        'last_name_m' => 'Vicencio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156913561',
        'name' => 'Alejandro Ivanov',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Barrionuevo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166139228',
        'name' => 'Walter Jair',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Bastias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129382953',
        'name' => 'Cristian',
        'last_name_p' => 'Romero',
        'last_name_m' => 'Muraña',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143096807',
        'name' => 'Raul',
        'last_name_p' => 'Garin',
        'last_name_m' => 'Calderon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145891892',
        'name' => 'MANUEL BENJAMIN',
        'last_name_p' => 'ARAYA',
        'last_name_m' => 'ROJO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137425742',
        'name' => 'Guillermo Leonel',
        'last_name_p' => 'Rivas',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '153948534',
        'name' => 'Jose Miguel',
        'last_name_p' => 'Becerra',
        'last_name_m' => 'Montero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183146653',
        'name' => 'ERLIE OLIVER GIOVANNI',
        'last_name_p' => 'CHOQUE',
        'last_name_m' => 'RAMIREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126079117',
        'name' => 'Ricardo Rodolfo',
        'last_name_p' => 'Maldonado',
        'last_name_m' => 'Huarita',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183138421',
        'name' => 'FREDDY RAUL',
        'last_name_p' => 'LOVERA',
        'last_name_m' => 'TUPA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008912364K',
        'name' => 'YERKO LUIS',
        'last_name_p' => 'PAVELICH',
        'last_name_m' => 'PERALTA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128157522',
        'name' => 'Hernan',
        'last_name_p' => 'Orellana',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170134753',
        'name' => 'FABIAN ESTEBAN',
        'last_name_p' => 'QUISPE ',
        'last_name_m' => 'GUARACHI',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88569113',
        'name' => 'Luis',
        'last_name_p' => 'Pradel',
        'last_name_m' => 'Ortega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '201569990',
        'name' => 'Yuzepellin',
        'last_name_p' => 'Castllo',
        'last_name_m' => 'Carrasco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '238781248',
        'name' => 'Jose',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Fasabi',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131150768',
        'name' => 'Cesar',
        'last_name_p' => 'Pilquinao',
        'last_name_m' => 'Nancufil',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162444069',
        'name' => 'Ronald Nicholas',
        'last_name_p' => 'Swaneck',
        'last_name_m' => 'Valencia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80826923',
        'name' => 'Patricio',
        'last_name_p' => 'Ramos',
        'last_name_m' => 'Ramos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132309302',
        'name' => 'Mario Eduardo',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Barrientos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118932870',
        'name' => 'Hugo',
        'last_name_p' => 'Zamora',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131043007',
        'name' => 'Cesar',
        'last_name_p' => 'Garrido',
        'last_name_m' => 'Aranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100171058',
        'name' => 'Fabian Alexis',
        'last_name_p' => 'Velasquez',
        'last_name_m' => 'Barrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95945732',
        'name' => 'Carlos',
        'last_name_p' => 'Oñate',
        'last_name_m' => 'Marañao',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102409752',
        'name' => 'Segundo',
        'last_name_p' => 'Huanchicay',
        'last_name_m' => 'Bordones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102325125',
        'name' => 'Marcos',
        'last_name_p' => 'Leiva',
        'last_name_m' => 'Yañez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '228701041',
        'name' => 'Ferly',
        'last_name_p' => 'Corvacho',
        'last_name_m' => 'Ramos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185069117',
        'name' => 'Cristian',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Bartolome',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100446472',
        'name' => 'Roberto',
        'last_name_p' => 'Figueroa',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159991199',
        'name' => 'Victor Alfonso',
        'last_name_p' => 'Vallejos ',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007913824K',
        'name' => 'Jaime',
        'last_name_p' => 'Veas',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '97992061',
        'name' => 'Cesar',
        'last_name_p' => 'Fleita',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175282629',
        'name' => 'JORGE',
        'last_name_p' => 'TAPIA',
        'last_name_m' => 'HIDALGO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188710603',
        'name' => 'Pablo',
        'last_name_p' => 'Tello',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132138494',
        'name' => 'Cesar Patricio ',
        'last_name_p' => 'Rojo',
        'last_name_m' => 'Palacios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160355522',
        'name' => 'NEMESIO',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'SEGUEL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168749708',
        'name' => 'Mychael',
        'last_name_p' => 'Palza',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104484298',
        'name' => 'Raul',
        'last_name_p' => 'Huanchicay',
        'last_name_m' => 'Bordones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90439286',
        'name' => 'Hector ',
        'last_name_p' => 'Carrasco ',
        'last_name_m' => 'Bello ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80105673',
        'name' => 'Carlos',
        'last_name_p' => 'Astudillo',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188268706',
        'name' => 'DANILO ANDRES',
        'last_name_p' => 'HONORES',
        'last_name_m' => 'PIZARRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162455524',
        'name' => 'Juan Daniel',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Lara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193969976',
        'name' => 'Leandro',
        'last_name_p' => 'Terrezas',
        'last_name_m' => 'Romero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177242713',
        'name' => 'Alfredo',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93198484',
        'name' => 'Guillermo ',
        'last_name_p' => 'Gallegos',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173921799',
        'name' => 'cristian javier ',
        'last_name_p' => 'medrano',
        'last_name_m' => 'valenzuela ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157975544',
        'name' => 'Jonathan Cristopher ',
        'last_name_p' => 'Flores ',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73014298',
        'name' => 'Juan',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106083207',
        'name' => 'Christian Bartholomew',
        'last_name_p' => 'Sommerville',
        'last_name_m' => 'Clift',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109110132',
        'name' => 'Marcelo Rodrigo',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Peñaloza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181830638',
        'name' => 'Marcos',
        'last_name_p' => 'Zebra',
        'last_name_m' => 'Alvarado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013358725K',
        'name' => 'Cristian Alejandro',
        'last_name_p' => 'Escarate',
        'last_name_m' => 'Zamorano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116392828',
        'name' => 'Juan Enrique ',
        'last_name_p' => 'Vera ',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98234551',
        'name' => 'Franklin Antonio',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135295906',
        'name' => 'MARCELO',
        'last_name_p' => 'CAAMAÑO',
        'last_name_m' => 'CRUZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93364716',
        'name' => 'Luis Edgardo',
        'last_name_p' => 'Roman',
        'last_name_m' => 'Sanhueza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144278356',
        'name' => 'Franz ',
        'last_name_p' => 'Pacheco',
        'last_name_m' => 'Paredes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124433355',
        'name' => 'Victor Antonio',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Ruiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73398622',
        'name' => 'Segundo',
        'last_name_p' => 'Rocha',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90896520',
        'name' => 'Deris David',
        'last_name_p' => 'Zuiga',
        'last_name_m' => 'Zarate',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150118735',
        'name' => 'Fabian',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176553936',
        'name' => 'Misael ',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Carraza ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179394243',
        'name' => 'Pedro Andres ',
        'last_name_p' => 'Tapia ',
        'last_name_m' => 'Saldias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122137899',
        'name' => 'Claudio',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182327506',
        'name' => 'Roberto',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Hernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161359874',
        'name' => 'Damian',
        'last_name_p' => 'Aravena',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139560124',
        'name' => 'Victor Miguel',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Quevedo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160378719',
        'name' => 'DANIEL',
        'last_name_p' => 'FLORES',
        'last_name_m' => 'OÑATE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172058256',
        'name' => 'Johan',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124841968',
        'name' => 'Roberto',
        'last_name_p' => 'Ahumada',
        'last_name_m' => 'Santander',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '009531189K',
        'name' => 'Abel',
        'last_name_p' => 'Alvarado',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142118831',
        'name' => 'Reinaldo',
        'last_name_p' => 'Suazo',
        'last_name_m' => 'Ascencio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129743123',
        'name' => 'EDUARDO',
        'last_name_p' => 'MONARDES',
        'last_name_m' => 'FLORES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '238466997',
        'name' => 'Edgar ',
        'last_name_p' => 'Mora ',
        'last_name_m' => 'Abita',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131332343',
        'name' => 'Patricio Eduardo',
        'last_name_p' => 'Baez',
        'last_name_m' => 'Gavilan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132630569',
        'name' => 'Pedro J.',
        'last_name_p' => 'Ayala',
        'last_name_m' => 'Calderon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '71400131',
        'name' => 'Pablo Esteban',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Ardiles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154054928',
        'name' => 'RODRIGO ALFONSO',
        'last_name_p' => 'ARIAS',
        'last_name_m' => 'AGUILAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90427350',
        'name' => 'LAUREANO AQUILES',
        'last_name_p' => 'ALCAINO',
        'last_name_m' => 'ESPINOZA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82046801',
        'name' => 'Manuel Segundo',
        'last_name_p' => 'Alveal',
        'last_name_m' => 'Delgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123474651',
        'name' => 'sergio enrique',
        'last_name_p' => 'carvajal',
        'last_name_m' => 'garrido',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190666077',
        'name' => 'JOSE IGNACIO',
        'last_name_p' => 'SALINAS',
        'last_name_m' => 'REYES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136422634',
        'name' => 'Jose',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Hidalgo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150244137',
        'name' => 'EDUARDO',
        'last_name_p' => 'MORALES',
        'last_name_m' => 'ORTIZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80333226',
        'name' => 'Samuel',
        'last_name_p' => 'Alcota',
        'last_name_m' => 'Varas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107988432',
        'name' => 'Rosa',
        'last_name_p' => 'Casanga',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113973455',
        'name' => 'Samuel Del Carmen',
        'last_name_p' => 'Catalan',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '218784283',
        'name' => 'Miguel',
        'last_name_p' => 'Choque',
        'last_name_m' => 'Mesa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156136778',
        'name' => 'Ariel Eduardo',
        'last_name_p' => 'Cole',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114656895',
        'name' => 'Mario Ernesto',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100179083',
        'name' => 'Tomas Alberto',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Riquelme',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018791809K',
        'name' => 'JUAN',
        'last_name_p' => 'MUÑOZ',
        'last_name_m' => 'OLIVEROS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116138107',
        'name' => 'Johnny',
        'last_name_p' => 'Tinte',
        'last_name_m' => 'Palleros',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188548660',
        'name' => 'Kevin Andres',
        'last_name_p' => 'Manriquez',
        'last_name_m' => 'Vasquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '97931313',
        'name' => 'Jaime Fernado',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Mora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185322580',
        'name' => 'MOISES JOSUE',
        'last_name_p' => 'DIAZ',
        'last_name_m' => 'IRIBARRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '241070549',
        'name' => 'MERY LIZETH',
        'last_name_p' => 'ESPINOZA',
        'last_name_m' => 'LARICO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '60963983',
        'name' => 'Orlando Ernesto ',
        'last_name_p' => 'Espinoza ',
        'last_name_m' => 'Toro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114066508',
        'name' => 'Manuel',
        'last_name_p' => 'Rain',
        'last_name_m' => 'Quilaman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100394537',
        'name' => 'Alex',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190488535',
        'name' => 'ROBERTO',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'TORO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018879212K',
        'name' => 'DIEGO',
        'last_name_p' => 'SAAVEDRA',
        'last_name_m' => 'SAAVEDRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116143054',
        'name' => 'Alberto',
        'last_name_p' => 'Mora',
        'last_name_m' => 'Sarabia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137531682',
        'name' => 'CARLOS',
        'last_name_p' => 'SAAVEDRA',
        'last_name_m' => 'ARCAYA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137988720',
        'name' => 'ALEJANDRO',
        'last_name_p' => 'CHANDIA',
        'last_name_m' => 'LARENAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79192341',
        'name' => 'Pedro Pablo',
        'last_name_p' => 'Muñoz ',
        'last_name_m' => 'Esquivel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015009416K',
        'name' => 'DELIO',
        'last_name_p' => 'CEPEDA',
        'last_name_m' => 'GAUBERT',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157333178',
        'name' => 'JONATAN',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'ROJAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187919843',
        'name' => 'PATRICIO',
        'last_name_p' => 'COLLAO',
        'last_name_m' => 'ROBLES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016153594K',
        'name' => 'ALAN',
        'last_name_p' => 'MELIMAN',
        'last_name_m' => 'MELIMAN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150034477',
        'name' => 'Leonel Fredy',
        'last_name_p' => 'Mollo',
        'last_name_m' => 'Menay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '220759431',
        'name' => 'Jose Moises',
        'last_name_p' => 'Huansi',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122438066',
        'name' => 'Alejandro',
        'last_name_p' => 'Gutierrez',
        'last_name_m' => 'PUENTE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '259043271',
        'name' => 'Frank',
        'last_name_p' => 'Rosero',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106246351',
        'name' => 'Nicolas',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102422724',
        'name' => 'Jose',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Tabilo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100685647',
        'name' => 'Mauricio',
        'last_name_p' => 'Angel',
        'last_name_m' => 'Tello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150521742',
        'name' => 'Claudio Andres',
        'last_name_p' => 'Alcaya',
        'last_name_m' => 'Maturana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126162960',
        'name' => 'Vladimir',
        'last_name_p' => 'Vergara',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183522051',
        'name' => 'Jimmy',
        'last_name_p' => 'Munizaga',
        'last_name_m' => 'Zepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190217485',
        'name' => 'Robinson Eduardo',
        'last_name_p' => 'Castro',
        'last_name_m' => 'Aguirre',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105060181',
        'name' => 'Juliano Hernan',
        'last_name_p' => 'Díaz ',
        'last_name_m' => 'Narrias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '77360352',
        'name' => 'VICTOR',
        'last_name_p' => 'GALLEGOS',
        'last_name_m' => 'CASTRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100219786',
        'name' => 'VICTOR',
        'last_name_p' => 'PINCHEIRA',
        'last_name_m' => 'TOLEDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144837835',
        'name' => 'DAVID',
        'last_name_p' => 'PINTO',
        'last_name_m' => 'ACOSTA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136256440',
        'name' => 'OSCAR',
        'last_name_p' => 'ORREGO',
        'last_name_m' => 'PADILLA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150070139',
        'name' => 'Daniel',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Casanoba',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016000309K',
        'name' => 'CRISTIAN',
        'last_name_p' => 'PEREZ',
        'last_name_m' => 'GONZALEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183137077',
        'name' => 'DIEGO',
        'last_name_p' => 'AGUILERA',
        'last_name_m' => 'GODOY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86784238',
        'name' => 'Milton Amaro',
        'last_name_p' => 'Cordero',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160514809',
        'name' => 'Jorge',
        'last_name_p' => 'Cepeda',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94297656',
        'name' => 'Eduardo',
        'last_name_p' => 'Gomez',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73602262',
        'name' => 'Juan Francisco',
        'last_name_p' => 'Coñoman',
        'last_name_m' => 'Llanquiqueo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165550285',
        'name' => 'Rafael Alonso',
        'last_name_p' => 'Andrades',
        'last_name_m' => 'Villacura',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104411975',
        'name' => 'ALEJANDRO',
        'last_name_p' => 'OLIVARES',
        'last_name_m' => 'VALDIVIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93983661',
        'name' => 'JUAN',
        'last_name_p' => 'SAEZ',
        'last_name_m' => 'GODOY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '195486689',
        'name' => 'LUIS',
        'last_name_p' => 'ARANCIBIA',
        'last_name_m' => 'BRITO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155139013',
        'name' => 'RODRIGO',
        'last_name_p' => 'GODOY',
        'last_name_m' => 'GERARDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '006101201K',
        'name' => 'Elias Joel',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Aguayo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182065781',
        'name' => 'Diego',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Ruiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150024404',
        'name' => 'Jorge Alberto',
        'last_name_p' => 'Ledezma',
        'last_name_m' => 'Labarca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '197112301',
        'name' => 'Emanuel Alvaro',
        'last_name_p' => 'Mamani',
        'last_name_m' => 'Calcina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104258433',
        'name' => 'JUAN',
        'last_name_p' => 'SEGUEL',
        'last_name_m' => 'DIAZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104065260',
        'name' => 'Jaime',
        'last_name_p' => 'Silva',
        'last_name_m' => 'Pacheco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78066687',
        'name' => 'Victor',
        'last_name_p' => 'Saldias',
        'last_name_m' => 'Navarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120692925',
        'name' => 'fidel ernesto',
        'last_name_p' => 'nilo',
        'last_name_m' => 'cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126156731',
        'name' => 'Emmanuel',
        'last_name_p' => 'Gamez',
        'last_name_m' => 'Aguilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126125763',
        'name' => 'Mauricio',
        'last_name_p' => 'Jimenez',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124398851',
        'name' => 'Harold',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Maya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119837383',
        'name' => 'Roberto',
        'last_name_p' => 'Montecinos',
        'last_name_m' => 'Meza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134232420',
        'name' => 'Sergio',
        'last_name_p' => 'Gajardo',
        'last_name_m' => 'Rios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '194356854',
        'name' => 'Martin',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015016219K',
        'name' => 'Jose',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143711064',
        'name' => 'Gustavo',
        'last_name_p' => 'Fernandez',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118075307',
        'name' => 'Jorge Alberto',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Plaza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142717379',
        'name' => 'Marco Antonio ',
        'last_name_p' => 'Troncoso',
        'last_name_m' => 'Mella',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177344990',
        'name' => 'Francisco',
        'last_name_p' => 'Barrios',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121168421',
        'name' => 'Alvaro ',
        'last_name_p' => 'Concha ',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171638194',
        'name' => 'Nicolas',
        'last_name_p' => 'Soto',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158088789',
        'name' => 'Benjamin',
        'last_name_p' => 'Concha',
        'last_name_m' => 'Retamal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174366489',
        'name' => 'Hector Leonel',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158132656',
        'name' => 'Anthony',
        'last_name_p' => 'Rojas ',
        'last_name_m' => 'Morales ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117200337',
        'name' => 'Jaime',
        'last_name_p' => 'Cardenas',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161332925',
        'name' => 'Claudio',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105484305',
        'name' => 'luis cesar',
        'last_name_p' => 'tolosa',
        'last_name_m' => 'cid',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012187914K',
        'name' => 'enrique claudio',
        'last_name_p' => 'bahamonde',
        'last_name_m' => 'lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224696574',
        'name' => 'Jonathan',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Guzman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174346178',
        'name' => 'Nilson',
        'last_name_p' => 'Carmona',
        'last_name_m' => 'Alcorta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92024164',
        'name' => 'Carlos Alberto',
        'last_name_p' => 'Triviño',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '189191014',
        'name' => 'JERSON',
        'last_name_p' => 'MERCADO',
        'last_name_m' => 'VEGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013420267K',
        'name' => 'Jaime Oriel',
        'last_name_p' => 'Maldonado',
        'last_name_m' => 'Selfene',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017437595K',
        'name' => 'Nayadeth',
        'last_name_p' => 'Piñones',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130166806',
        'name' => 'Manuel Alejandro',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139378040',
        'name' => 'Victor Andres ',
        'last_name_p' => 'Cea',
        'last_name_m' => 'Alegria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131731590',
        'name' => 'Williams Paul',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Sepulveda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105130678',
        'name' => 'Miguel Jacinto',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Orellana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138646424',
        'name' => 'ALEXIS CRISTIAN',
        'last_name_p' => 'FLORES',
        'last_name_m' => 'VASQUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168686781',
        'name' => 'Erick',
        'last_name_p' => 'Segovia',
        'last_name_m' => 'Simon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100272148',
        'name' => 'ANIBAL HUMBERTO',
        'last_name_p' => 'AREVALO',
        'last_name_m' => 'GALLARDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144120167',
        'name' => 'Juan Enrique',
        'last_name_p' => 'Ortiz',
        'last_name_m' => 'Millalonco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82331042',
        'name' => 'Carlos Isaac',
        'last_name_p' => 'Troncoso',
        'last_name_m' => 'Mella',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112447806',
        'name' => 'Ricardo',
        'last_name_p' => 'Lagos',
        'last_name_m' => 'Moraga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133770879',
        'name' => 'Rodrigo Andres',
        'last_name_p' => 'Vildosola',
        'last_name_m' => 'Mendez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016391543K',
        'name' => 'BORIS ENRIQUE',
        'last_name_p' => 'TORRES',
        'last_name_m' => 'FIGUEROA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '004791521K',
        'name' => 'Luis',
        'last_name_p' => 'Merino',
        'last_name_m' => 'Sanzana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008032779K',
        'name' => 'Aladin Guillermo',
        'last_name_p' => 'Huenulef',
        'last_name_m' => 'Alvarez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144794257',
        'name' => 'Carlos',
        'last_name_p' => 'Caceres',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119370043',
        'name' => 'Flavio Alejandro',
        'last_name_p' => 'Escobar',
        'last_name_m' => 'Ordenes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145356520',
        'name' => 'Jose Luis',
        'last_name_p' => 'Almonacid',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '217335833',
        'name' => 'Sandra',
        'last_name_p' => 'Silva',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104113990',
        'name' => 'Juan Manuel',
        'last_name_p' => 'Llanos ',
        'last_name_m' => 'Aguilar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120833936',
        'name' => 'Jesus',
        'last_name_p' => 'Segovia',
        'last_name_m' => 'Guerra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '258557050',
        'name' => 'Luis',
        'last_name_p' => 'Barrios',
        'last_name_m' => '...',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126925271',
        'name' => 'Christopher',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Carreño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158123819',
        'name' => 'Manuel Alejandro',
        'last_name_p' => 'Venegas',
        'last_name_m' => 'Dias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159750035',
        'name' => 'Mauricio ',
        'last_name_p' => 'Castillo ',
        'last_name_m' => 'Gómez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119463092',
        'name' => 'Cristian',
        'last_name_p' => 'Urtubia',
        'last_name_m' => 'Zamora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126961332',
        'name' => 'Juan',
        'last_name_p' => 'Arevalos',
        'last_name_m' => 'Solis',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124239702',
        'name' => 'Waldo',
        'last_name_p' => 'Cerda',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162248553',
        'name' => 'gino arnaldo',
        'last_name_p' => 'concha',
        'last_name_m' => 'arias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89665337',
        'name' => 'Jorge Mauricio',
        'last_name_p' => 'Villarroel ',
        'last_name_m' => 'Messina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92653226',
        'name' => 'Patricio',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131778767',
        'name' => 'Eduardo Antonio',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Chirino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171333792',
        'name' => 'Luis',
        'last_name_p' => 'Harvey',
        'last_name_m' => 'Martin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129787341',
        'name' => 'Jaime Ruperto',
        'last_name_p' => 'Melo',
        'last_name_m' => 'Carrasco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159939103',
        'name' => 'Pablo Alexis',
        'last_name_p' => 'Mendoza',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156111864',
        'name' => 'Maria',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141492411',
        'name' => 'RODRIGO',
        'last_name_p' => 'TORRES',
        'last_name_m' => 'DELGADILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141132520',
        'name' => 'Jaime',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Guzman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169265968',
        'name' => 'Jadran Breller',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Radic',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168479611',
        'name' => 'Jennifer',
        'last_name_p' => 'Pastén',
        'last_name_m' => 'Lizardi',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129758600',
        'name' => 'Eduardo',
        'last_name_p' => 'Vidal',
        'last_name_m' => 'Burgos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '229092294',
        'name' => 'Roberto',
        'last_name_p' => 'Borrego',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130139469',
        'name' => 'Eduardo Segundo',
        'last_name_p' => 'Cornejo',
        'last_name_m' => 'Ceballos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166947197',
        'name' => 'Raul Antonio',
        'last_name_p' => 'Ortega',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182327212',
        'name' => 'Gislaine',
        'last_name_p' => 'Borquez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150360862',
        'name' => 'Ricardo Patricio',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Leyton',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127199264',
        'name' => 'Claudia',
        'last_name_p' => 'Toledo',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '225920885',
        'name' => 'Yola',
        'last_name_p' => 'Mamani',
        'last_name_m' => 'Acero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183122223',
        'name' => 'INGUIBORG DAYANA',
        'last_name_p' => 'RAMOS ',
        'last_name_m' => 'ILLANES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167731716',
        'name' => 'Jose',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Huerta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150642248',
        'name' => 'Alexi Andres',
        'last_name_p' => 'Mena ',
        'last_name_m' => 'Figueroa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139870107',
        'name' => 'FRANCISCO JAVIER',
        'last_name_p' => 'ZUÑIGA',
        'last_name_m' => 'PALLALEO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150393272',
        'name' => 'MACARENA JOCELYN',
        'last_name_p' => 'BOLBARAN ',
        'last_name_m' => 'CASTILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '135297011',
        'name' => 'CARLOS FROILAN',
        'last_name_p' => 'CASTILLO',
        'last_name_m' => 'LUNA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166727057',
        'name' => 'Maria Luisa',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151237932',
        'name' => 'EDUARDO',
        'last_name_p' => 'MUÑOZ',
        'last_name_m' => 'MUÑOZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130435602',
        'name' => 'Alejandro',
        'last_name_p' => 'Roa',
        'last_name_m' => 'Corvalan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166726271',
        'name' => 'Karla Andres',
        'last_name_p' => 'Valdes',
        'last_name_m' => 'Caceres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171741165',
        'name' => 'Lorena Alejandra',
        'last_name_p' => 'Guerra',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164890716',
        'name' => 'Romina Lucia',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Galvez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151254454',
        'name' => 'Lautaro Arturo',
        'last_name_p' => 'Marquez',
        'last_name_m' => 'Portilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '153202311',
        'name' => 'FAVIANA LILIANA',
        'last_name_p' => 'AGUILAR',
        'last_name_m' => 'FIGUEROA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105549954',
        'name' => 'Patricio',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '99221399',
        'name' => 'Jorge',
        'last_name_p' => 'Fuenzalida',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150372690',
        'name' => 'JOHAN',
        'last_name_p' => 'CORTES',
        'last_name_m' => 'PASTEN',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158018810',
        'name' => 'JONATHAN',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'ROJAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128558691',
        'name' => 'ANGELICA',
        'last_name_p' => 'ALARCON',
        'last_name_m' => 'BAEZA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010852782K',
        'name' => 'VILMA',
        'last_name_p' => 'PEREZ',
        'last_name_m' => 'ACUÑA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181410140',
        'name' => 'CARLA ESTEFANIA',
        'last_name_p' => 'ARRIAGADA',
        'last_name_m' => 'QUISPE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101682943',
        'name' => 'MARIO',
        'last_name_p' => 'PEÑA',
        'last_name_m' => 'ESQUIVEL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141114913',
        'name' => 'Jorge Danel',
        'last_name_p' => 'Jopia',
        'last_name_m' => 'Leiva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136553208',
        'name' => 'SERGIO',
        'last_name_p' => 'CARTAGENA',
        'last_name_m' => 'ORDOÑEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015707217K',
        'name' => 'ANGELO',
        'last_name_p' => 'ROCCO',
        'last_name_m' => 'HENRIQUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015801761K',
        'name' => 'Rodrigo',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116147513',
        'name' => 'Cristian ',
        'last_name_p' => 'Astudillo',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184826917',
        'name' => 'Diego ',
        'last_name_p' => 'Pasten ',
        'last_name_m' => 'Campusano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124363888',
        'name' => 'HENRY DAVID ',
        'last_name_p' => 'ROJAS ',
        'last_name_m' => 'TABILO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144129377',
        'name' => 'Adrian',
        'last_name_p' => 'Venegas',
        'last_name_m' => 'Carcamo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167380387',
        'name' => 'Jonathan Segundo',
        'last_name_p' => 'Matamala',
        'last_name_m' => 'Castro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157655078',
        'name' => 'Felipe',
        'last_name_p' => 'Cortes',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162595571',
        'name' => 'Gabriel',
        'last_name_p' => 'Orella',
        'last_name_m' => 'Chancay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '195517797',
        'name' => 'Jhonny Patricio',
        'last_name_p' => 'Cuello ',
        'last_name_m' => 'Veliz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016541120K',
        'name' => 'Jonathan',
        'last_name_p' => 'Guarda',
        'last_name_m' => 'Vasquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177990442',
        'name' => 'Victor',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Techeillman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163401606',
        'name' => 'jhon alan',
        'last_name_p' => 'lepe',
        'last_name_m' => 'reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122826694',
        'name' => 'Vicente',
        'last_name_p' => 'Cayuqueo',
        'last_name_m' => 'Quidel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156842761',
        'name' => 'Franco Hernan',
        'last_name_p' => 'Cesped',
        'last_name_m' => 'Bunster',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150860202',
        'name' => 'Francisco',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Calderon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '211385839',
        'name' => 'Jorge',
        'last_name_p' => 'Mas',
        'last_name_m' => 'Labrin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128115994',
        'name' => 'juan enrique',
        'last_name_p' => 'crisostomo',
        'last_name_m' => 'estay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114653594',
        'name' => 'Victor',
        'last_name_p' => 'González',
        'last_name_m' => 'Durán',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139781279',
        'name' => 'Marco Andres',
        'last_name_p' => 'Vargas',
        'last_name_m' => 'Porras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81490015',
        'name' => 'Felix Enrique',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177240370',
        'name' => 'Gabriel',
        'last_name_p' => 'Arancibia',
        'last_name_m' => 'Marin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '83992190',
        'name' => 'Edison',
        'last_name_p' => 'Valdebenito',
        'last_name_m' => 'Toro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106067996',
        'name' => 'Patricio',
        'last_name_p' => 'Vargas',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '195388113',
        'name' => 'CRISTOFER',
        'last_name_p' => 'CARRASCO',
        'last_name_m' => 'CONTRERAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125818072',
        'name' => 'Cristian Ivan',
        'last_name_p' => 'Gaete',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165667832',
        'name' => 'Diego',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184825651',
        'name' => 'Hugo Antonio',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Zapata',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179749734',
        'name' => 'Mauricio Alejandro',
        'last_name_p' => 'Portilla',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164688968',
        'name' => 'GINO ANDRES',
        'last_name_p' => 'MORETTI ',
        'last_name_m' => 'SALGADO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '149033742',
        'name' => 'WILSON',
        'last_name_p' => 'godoy',
        'last_name_m' => 'bugueño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120288350',
        'name' => 'Martin',
        'last_name_p' => 'Choque',
        'last_name_m' => 'Luna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141031422',
        'name' => 'Jorge ',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Orellana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157609491',
        'name' => 'Americo',
        'last_name_p' => 'Pinochet',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158138840',
        'name' => 'Cristian',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Huerta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146867995',
        'name' => 'JORGE ORLANDO',
        'last_name_p' => 'INOCENTE',
        'last_name_m' => 'AGAPITO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98234497',
        'name' => 'Jose Manuel',
        'last_name_p' => 'Medina',
        'last_name_m' => 'Chocobar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128345957',
        'name' => 'JAVIER MAURICIO',
        'last_name_p' => 'MORALEDA ',
        'last_name_m' => 'MONROY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185999068',
        'name' => 'Luis Ariel',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Esquivel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156955655',
        'name' => 'ESTEBAN RAFAEL ',
        'last_name_p' => 'DOSSETO ',
        'last_name_m' => 'GARCIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165659422',
        'name' => 'Dick',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Cortez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185045080',
        'name' => 'Carlos',
        'last_name_p' => 'Vidal ',
        'last_name_m' => 'Balboa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '248818948',
        'name' => 'Luis ',
        'last_name_p' => 'Montalvan',
        'last_name_m' => 'Barboza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176543973',
        'name' => 'ALEXANDER',
        'last_name_p' => 'SEGOVIA',
        'last_name_m' => 'FLORES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168691289',
        'name' => 'JHOSETH SAUL',
        'last_name_p' => 'VILLALOBOS',
        'last_name_m' => 'CHOQUE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134178299',
        'name' => 'Mauricio',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91629577',
        'name' => 'Sergio',
        'last_name_p' => 'Cerro',
        'last_name_m' => 'Mancilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146848907',
        'name' => 'Wilman',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Salamanca',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138621715',
        'name' => 'roberto juan',
        'last_name_p' => 'tapia',
        'last_name_m' => 'villalobos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163384760',
        'name' => 'ERICKH NOLVERTO ',
        'last_name_p' => 'NOACK ',
        'last_name_m' => 'ZUMARAN ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158040883',
        'name' => 'LUIS ANDRES',
        'last_name_p' => 'POBLETE',
        'last_name_m' => 'JORQUERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136397257',
        'name' => 'javier',
        'last_name_p' => 'carisaya',
        'last_name_m' => 'leyton',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170937589',
        'name' => 'ADAN ENMANUEL',
        'last_name_p' => 'ANGEL',
        'last_name_m' => 'CRUZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '76587515',
        'name' => 'Juan',
        'last_name_p' => 'Suazo',
        'last_name_m' => 'Chacana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150149207',
        'name' => 'JOSE',
        'last_name_p' => 'ALVAREZ ',
        'last_name_m' => 'FLORES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109258636',
        'name' => 'Manuel',
        'last_name_p' => 'Salva',
        'last_name_m' => 'Patiño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168567340',
        'name' => 'Alejandro',
        'last_name_p' => 'Valdes',
        'last_name_m' => 'Vergara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89275016',
        'name' => 'Ricardo Alex',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Quispe',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018483328K',
        'name' => 'CARLOS',
        'last_name_p' => 'ADONES',
        'last_name_m' => 'SARAVIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98720650',
        'name' => 'Pablo Antonio',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104183050',
        'name' => 'Patricio',
        'last_name_p' => 'Cifuentes',
        'last_name_m' => 'Faundez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117786609',
        'name' => 'Carlos',
        'last_name_p' => 'Salas',
        'last_name_m' => 'Carrasco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157334794',
        'name' => 'Danny',
        'last_name_p' => 'Guerra',
        'last_name_m' => 'Vallejo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132158843',
        'name' => 'Daniel',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Maya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008069833K',
        'name' => 'Jaime',
        'last_name_p' => 'Perez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91480115',
        'name' => 'Sergio Hernan',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '74507719',
        'name' => 'Ricardo',
        'last_name_p' => 'Cepeda',
        'last_name_m' => 'Madariaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185833631',
        'name' => 'Roberto',
        'last_name_p' => 'Marambio',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '245732074',
        'name' => 'Juan',
        'last_name_p' => 'Angola',
        'last_name_m' => 'Sardinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018827059K',
        'name' => 'David',
        'last_name_p' => 'Cruz',
        'last_name_m' => 'Leyton',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015018293K',
        'name' => 'Herbert',
        'last_name_p' => 'Quispe',
        'last_name_m' => 'Cayo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108600039',
        'name' => 'Juan',
        'last_name_p' => 'Becerra',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018184082K',
        'name' => 'MARCOS',
        'last_name_p' => 'CASTILLO',
        'last_name_m' => 'ARAYA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75812132',
        'name' => 'Jose ',
        'last_name_p' => 'Valenzuela',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145290376',
        'name' => 'DIEGO',
        'last_name_p' => 'CALDERON',
        'last_name_m' => 'BARRERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73981530',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Carvajal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123583728',
        'name' => 'FABIAN MARCELO',
        'last_name_p' => 'AMARO',
        'last_name_m' => 'LOPEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119337054',
        'name' => 'Victor',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Henriquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158119935',
        'name' => 'Patricio Gerardo',
        'last_name_p' => 'Toledo',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91949342',
        'name' => 'Aldo',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134192526',
        'name' => 'Manuel Ernesto',
        'last_name_p' => 'Jimenez',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93372018',
        'name' => 'Pacifico ',
        'last_name_p' => 'Oliden',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016538038K',
        'name' => 'JONATHAN',
        'last_name_p' => 'MATAMALA',
        'last_name_m' => 'CASTRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101142825',
        'name' => 'HECTOR',
        'last_name_p' => 'BARRAZA',
        'last_name_m' => 'EDUARDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181836865',
        'name' => 'Maycol',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Alfaro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100288222',
        'name' => 'Rigoberto Emilio',
        'last_name_p' => 'Escobar',
        'last_name_m' => 'Ulloa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78698837',
        'name' => 'Jaime',
        'last_name_p' => 'Jofre',
        'last_name_m' => 'Maluenda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185066363',
        'name' => 'Jonathan',
        'last_name_p' => 'Elgueta',
        'last_name_m' => 'Marcoleta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136391348',
        'name' => 'Roberto',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167207529',
        'name' => 'Angelo',
        'last_name_p' => 'Choque ',
        'last_name_m' => 'Cruz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125673155',
        'name' => 'HERIBERTO MARCELO ',
        'last_name_p' => 'TEJERINA',
        'last_name_m' => 'LIENDRO ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '79510459',
        'name' => 'Luis',
        'last_name_p' => 'Villarrroel',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '127000913',
        'name' => 'Sergio',
        'last_name_p' => 'Saldivia',
        'last_name_m' => 'Gacitua',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88324218',
        'name' => 'Jaime',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '66616487',
        'name' => 'Jorge Eduardo',
        'last_name_p' => 'Riquelme ',
        'last_name_m' => 'Medina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108807679',
        'name' => 'Carlos Enrique ',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Contador',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134179724',
        'name' => 'Miguel',
        'last_name_p' => 'Neira',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '117203360',
        'name' => 'Johnny',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Contador',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93607082',
        'name' => 'Luis',
        'last_name_p' => 'Munoz',
        'last_name_m' => 'Vargas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82818499',
        'name' => 'Ramon luis',
        'last_name_p' => 'Santander',
        'last_name_m' => 'Hidalgo ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175302832',
        'name' => 'chistopher giannini',
        'last_name_p' => 'sierra',
        'last_name_m' => 'salinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173930356',
        'name' => 'EDWIN DANIEL',
        'last_name_p' => 'CASTILLO',
        'last_name_m' => 'PIZARRO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114497908',
        'name' => 'Claudio Aristides',
        'last_name_p' => 'Padilla',
        'last_name_m' => 'Sandoval',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '245395914',
        'name' => 'RAUL',
        'last_name_p' => 'PEREZ',
        'last_name_m' => 'VEIZAGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183519360',
        'name' => 'paul',
        'last_name_p' => 'cortes ',
        'last_name_m' => 'contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138644693',
        'name' => 'VICTOR PATRICIO',
        'last_name_p' => 'SUAREZ',
        'last_name_m' => 'IZQUIERDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158139006',
        'name' => 'CLAUDIO',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'AVALOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98700692',
        'name' => 'Raul',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Sepulveda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112213341',
        'name' => 'Eladio Enrique',
        'last_name_p' => 'Barraza',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122149676',
        'name' => 'Salvador Enrique',
        'last_name_p' => 'Trujillo',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129250437',
        'name' => 'Manuel',
        'last_name_p' => 'Monsalve',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '70587912',
        'name' => 'Jose',
        'last_name_p' => 'Concha',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190571866',
        'name' => 'CARLOS',
        'last_name_p' => 'GAJARDO',
        'last_name_m' => 'TORO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '171423724',
        'name' => 'CLAUDIO ARTURO',
        'last_name_p' => 'CAÑAS',
        'last_name_m' => ' MENDEZ ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143474771',
        'name' => 'Marcelo Antonio',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013528663K',
        'name' => 'Mario Eduardo',
        'last_name_p' => 'Pineda ',
        'last_name_m' => 'Albañez ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88041062',
        'name' => 'Faustino',
        'last_name_p' => 'Alvarez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104234593',
        'name' => 'Lorenzo Adrian',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '255882589',
        'name' => 'Roimer',
        'last_name_p' => 'Mendoza',
        'last_name_m' => 'Janco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '186562542',
        'name' => 'PABLO',
        'last_name_p' => 'TOLEDO',
        'last_name_m' => 'VALENZUELA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179747634',
        'name' => 'Hector Jonathan ',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Leon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '200941241',
        'name' => 'JAVIER',
        'last_name_p' => 'MURAÑA',
        'last_name_m' => 'MAMANI',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145324106',
        'name' => 'Roberto',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Salas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016613966K',
        'name' => 'LUIS',
        'last_name_p' => 'ROBLES',
        'last_name_m' => 'LEVIO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133585893',
        'name' => 'cristian enrique',
        'last_name_p' => 'julio',
        'last_name_m' => 'rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '215897419',
        'name' => 'Angel',
        'last_name_p' => 'Cuizara',
        'last_name_m' => 'Calani',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '186543696',
        'name' => 'Ivan   ',
        'last_name_p' => 'Carpanchay ',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183841912',
        'name' => 'Renan Alejandro ',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Araos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113538619',
        'name' => 'Victor',
        'last_name_p' => 'Fernandez',
        'last_name_m' => 'Monsalves',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183735195',
        'name' => 'Nickolas',
        'last_name_p' => 'Ormeño',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '55319014',
        'name' => 'FRANCISCO ',
        'last_name_p' => 'GALINDO ',
        'last_name_m' => 'CHAUR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '97929203',
        'name' => 'Jaime ',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '120119303',
        'name' => 'geovanni sergio',
        'last_name_p' => 'gilardi',
        'last_name_m' => 'salas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102772466',
        'name' => 'CARLOS',
        'last_name_p' => 'AYALA',
        'last_name_m' => 'ROQUES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170202783',
        'name' => 'Cristian Rodrigo',
        'last_name_p' => 'Nogales',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125777120',
        'name' => 'Ruben',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Pereira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143744264',
        'name' => 'Pedro',
        'last_name_p' => 'Carrasco',
        'last_name_m' => 'Inostroza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102364252',
        'name' => 'Daniel',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Corrotea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125165796',
        'name' => 'Ulianov',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Carreño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88787137',
        'name' => 'José ',
        'last_name_p' => 'Cuevas ',
        'last_name_m' => 'Concha ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170922980',
        'name' => 'PAULO',
        'last_name_p' => 'JERIA',
        'last_name_m' => 'JERIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156856134',
        'name' => 'Andres',
        'last_name_p' => 'Moya',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '87349063',
        'name' => 'Emiliano Humberto',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Espinoza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '023326041K',
        'name' => 'Ivan ',
        'last_name_p' => 'Pescador',
        'last_name_m' => 'Meza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131424566',
        'name' => 'PATRICIO ',
        'last_name_p' => 'CARRIEL',
        'last_name_m' => 'SOTO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90135597',
        'name' => 'Jorge Andres',
        'last_name_p' => 'Lemus',
        'last_name_m' => 'Villanueva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141712209',
        'name' => 'Felipe',
        'last_name_p' => 'Quezada',
        'last_name_m' => 'Hueitra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172479960',
        'name' => 'Jose Luis',
        'last_name_p' => 'Segura',
        'last_name_m' => 'Valderas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82837922',
        'name' => 'Gaston Eduardo',
        'last_name_p' => 'Arancibia',
        'last_name_m' => 'Calderon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179749785',
        'name' => 'CRISTAL',
        'last_name_p' => 'MAMANI',
        'last_name_m' => 'VIZCARRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174377146',
        'name' => 'Franco',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '94721407',
        'name' => 'DAVID ROLANDO',
        'last_name_p' => 'REYGADAS',
        'last_name_m' => 'BAVESTRELLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86975106',
        'name' => 'JUAN CARLOS',
        'last_name_p' => 'SERRANO',
        'last_name_m' => 'POBLETE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '82640797',
        'name' => 'ANGEL JESUS',
        'last_name_p' => 'CORREA',
        'last_name_m' => 'MOLINA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '36113278',
        'name' => 'FERNANDO',
        'last_name_p' => 'ESCOBAR',
        'last_name_m' => 'ESCOBAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143660915',
        'name' => 'Alfredo',
        'last_name_p' => 'Jimenez',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157700294',
        'name' => 'Ruben Fernando',
        'last_name_p' => 'Cruz ',
        'last_name_m' => 'Ayabire',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '99198753',
        'name' => 'CARLOS MANUEL',
        'last_name_p' => 'CONTRERAS',
        'last_name_m' => 'ZARATE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156800155',
        'name' => 'Jose',
        'last_name_p' => 'Irarrazabal',
        'last_name_m' => 'Plaza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157684345',
        'name' => 'ERWIN',
        'last_name_p' => 'JIMENEZ',
        'last_name_m' => 'MERCADO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80824203',
        'name' => 'Javier',
        'last_name_p' => 'Velasquez',
        'last_name_m' => 'Opaze',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86914948',
        'name' => 'LINCOYAN',
        'last_name_p' => 'ZARATE',
        'last_name_m' => 'SALVATIERRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118446666',
        'name' => 'MAURO',
        'last_name_p' => 'SALAS',
        'last_name_m' => 'SILVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167328067',
        'name' => 'Jorge Antonio ',
        'last_name_p' => 'Pinto',
        'last_name_m' => 'Cordova',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92355926',
        'name' => 'MOISES',
        'last_name_p' => 'PEÑAILILLO',
        'last_name_m' => 'ALFARO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '74801064',
        'name' => 'JORGE',
        'last_name_p' => 'ROMAN',
        'last_name_m' => 'SILVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101015424',
        'name' => 'JOSE',
        'last_name_p' => 'GALAZ',
        'last_name_m' => 'CASTILLO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122170268',
        'name' => 'LUIS ',
        'last_name_p' => 'RIVERA',
        'last_name_m' => 'SAAVEDRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91735458',
        'name' => 'Jaime ',
        'last_name_p' => 'Menay',
        'last_name_m' => 'Navarrete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150441935',
        'name' => 'MIGUEL',
        'last_name_p' => 'OLIVARES',
        'last_name_m' => 'BUGUEÑO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161329525',
        'name' => 'Cesar',
        'last_name_p' => 'Duran',
        'last_name_m' => 'Zapata',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '159755371',
        'name' => 'Jean Pierre',
        'last_name_p' => 'Belmar',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108113634',
        'name' => 'Pamela',
        'last_name_p' => 'Iraola',
        'last_name_m' => 'Bugueño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89967678',
        'name' => 'Pablo',
        'last_name_p' => 'Cerda',
        'last_name_m' => 'Salinas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91923157',
        'name' => 'Juan Miguel',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181356758',
        'name' => 'josue',
        'last_name_p' => 'bravo',
        'last_name_m' => 'v',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139963725',
        'name' => 'MARCELO',
        'last_name_p' => 'MIRANDA',
        'last_name_m' => 'SANDOVAL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142831236',
        'name' => 'Rafael Marcelo',
        'last_name_p' => 'Cobelli',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161339636',
        'name' => 'Jesus Del Rosario',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Valenzuela',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134205911',
        'name' => 'Henry',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144551176',
        'name' => 'MIGUEL ',
        'last_name_p' => 'CATALAN',
        'last_name_m' => 'PAZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '97566798',
        'name' => 'Marco',
        'last_name_p' => 'Aravena',
        'last_name_m' => 'Valdebenito',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143742016',
        'name' => 'German Eduardo',
        'last_name_p' => 'Palma',
        'last_name_m' => 'Mora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129383453',
        'name' => 'LUIS',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'MAMANI',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '153251002',
        'name' => 'Guillermo',
        'last_name_p' => 'Milla',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95507069',
        'name' => 'Patricio ',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Riquelme',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015018777K',
        'name' => 'Jose',
        'last_name_p' => 'Culun',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150449499',
        'name' => 'pATRICIO',
        'last_name_p' => 'Pizarr',
        'last_name_m' => 'Carvajal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '217150299',
        'name' => 'Willber Cristofer',
        'last_name_p' => 'Chambergo ',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180148159',
        'name' => 'Alejandro',
        'last_name_p' => 'Cabrera',
        'last_name_m' => 'Roblero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150241405',
        'name' => 'Roberto',
        'last_name_p' => 'Carbrera',
        'last_name_m' => 'Robledo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133890335',
        'name' => 'Wladimir Antonio',
        'last_name_p' => 'Varela',
        'last_name_m' => 'Coronado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89958040',
        'name' => 'Claudio Antonio',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Jaque',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105805012',
        'name' => 'Maximo Arcadio ',
        'last_name_p' => 'Escobar ',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138759946',
        'name' => 'Cristian Jesus',
        'last_name_p' => 'Jofre',
        'last_name_m' => 'Covarrubias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015055747K',
        'name' => 'Alfonso Rodrigo',
        'last_name_p' => 'Pavon',
        'last_name_m' => 'Castro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115434594',
        'name' => 'Juan Evangelista',
        'last_name_p' => 'Antilef ',
        'last_name_m' => 'Lefin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142967227',
        'name' => 'Daniel',
        'last_name_p' => 'Segovia',
        'last_name_m' => 'Marin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90194364',
        'name' => 'Hector ',
        'last_name_p' => 'Pasten',
        'last_name_m' => 'Quiroga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '236076881',
        'name' => 'WILDER',
        'last_name_p' => 'OROBIO',
        'last_name_m' => 'BARRERA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98628533',
        'name' => 'HERIBERTO SEGUNDO',
        'last_name_p' => 'RAMOS ',
        'last_name_m' => 'GODOY',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012171390K',
        'name' => 'Orlando',
        'last_name_p' => 'Gomez',
        'last_name_m' => 'Cuevas ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112185070',
        'name' => 'Jose Eduardo',
        'last_name_p' => 'Antilef',
        'last_name_m' => 'Lefin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129700300',
        'name' => 'MARCELO',
        'last_name_p' => 'PALACIOS',
        'last_name_m' => 'TAPIA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017393288K',
        'name' => 'YERKO JAVIER',
        'last_name_p' => 'CASTILLO ',
        'last_name_m' => 'CARRASCO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144649834',
        'name' => 'RODRIGO ALEXIS',
        'last_name_p' => 'BARBOSA',
        'last_name_m' => 'OSSANDON',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176567821',
        'name' => 'Christopher',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170381564',
        'name' => 'Alonso',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '83786051',
        'name' => 'Alex',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '199672401',
        'name' => 'Javier ',
        'last_name_p' => 'Jiménez ',
        'last_name_m' => 'Galleguillos ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155205121',
        'name' => 'Juan',
        'last_name_p' => 'Chavez',
        'last_name_m' => 'Alarcon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123196031',
        'name' => 'Jose',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Montes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90707019',
        'name' => 'Hugo Guillermo',
        'last_name_p' => 'Vallejos',
        'last_name_m' => 'Aguilera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '005249396K',
        'name' => 'Luis Rigoberto',
        'last_name_p' => 'Fernandez',
        'last_name_m' => 'Palacios',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158119447',
        'name' => 'Hector Atalibar',
        'last_name_p' => 'Gallardo',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177329592',
        'name' => 'Ricardo Bryan de Jesus',
        'last_name_p' => 'Gongora',
        'last_name_m' => 'Rivera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143713970',
        'name' => 'Rodolfo',
        'last_name_p' => 'Artal',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '103078741',
        'name' => 'Patricio Del Rosario',
        'last_name_p' => 'Briceño',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118174739',
        'name' => 'Patricio',
        'last_name_p' => 'Argandoña',
        'last_name_m' => 'Chavez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '69405894',
        'name' => 'Mario',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Carmona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018879064K',
        'name' => 'Diego Ignacio',
        'last_name_p' => 'Lobos',
        'last_name_m' => 'Guerrero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150512441',
        'name' => 'Francisco',
        'last_name_p' => 'Galleguillos',
        'last_name_m' => 'Pastenes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176055065',
        'name' => 'Angel',
        'last_name_p' => 'Portilla',
        'last_name_m' => 'Mandiola',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184212714',
        'name' => 'FABIAN ELIAS',
        'last_name_p' => 'VILLARROEL',
        'last_name_m' => 'LOPEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '180181601',
        'name' => 'Leonardo Andes',
        'last_name_p' => 'Betancourt',
        'last_name_m' => 'Valencia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '67886895',
        'name' => 'LUIS GREGORIO',
        'last_name_p' => 'ZAPATA',
        'last_name_m' => 'PARRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016499970K',
        'name' => 'Adolfo Ricardo ',
        'last_name_p' => 'Riffo',
        'last_name_m' => 'Castro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122113388',
        'name' => 'Andres Mauricio',
        'last_name_p' => 'Tello',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84946206',
        'name' => 'FLORENCIO ANTONIO',
        'last_name_p' => 'ROJAS',
        'last_name_m' => 'CORTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141896466',
        'name' => 'Roberto Carlos',
        'last_name_p' => 'Osorio',
        'last_name_m' => 'Maira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88131827',
        'name' => 'Mauricio Antonio',
        'last_name_p' => 'Urbina',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156906166',
        'name' => 'PATRICIO ADRIAN',
        'last_name_p' => 'BORQUEZ',
        'last_name_m' => 'FLORES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '192047617',
        'name' => 'BASTIAN MAURICIO',
        'last_name_p' => 'PEREZ',
        'last_name_m' => 'NAVARRETE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95198953',
        'name' => 'Jorge',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Hermosilla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140704814',
        'name' => 'ricardo',
        'last_name_p' => 'loyola',
        'last_name_m' => 'inostroza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123219139',
        'name' => 'CRISTIAN JAVIER',
        'last_name_p' => 'VALDEBENITO',
        'last_name_m' => 'JARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193021557',
        'name' => 'LUIS DAVID',
        'last_name_p' => 'VILLCA',
        'last_name_m' => 'ALAVE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170379411',
        'name' => 'Richard Alejandro ',
        'last_name_p' => 'Callejas ',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106051011',
        'name' => 'Haroldo',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Balboa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169068062',
        'name' => 'Jonathan',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Astudillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '157779478',
        'name' => 'Ivan',
        'last_name_p' => 'Fuentes',
        'last_name_m' => 'Manriquez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182341037',
        'name' => 'Marcelo',
        'last_name_p' => 'Pasten',
        'last_name_m' => 'Garrido',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187933439',
        'name' => 'Oscar Ignacio',
        'last_name_p' => 'Mancilla',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167559840',
        'name' => 'Juan',
        'last_name_p' => 'Calderon',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102456793',
        'name' => 'indalecio manuel',
        'last_name_p' => 'gonzalez',
        'last_name_m' => 'oyarce',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '207522694',
        'name' => 'Yuvel',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Mayorga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011523076K',
        'name' => 'Luis Manuel',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Tello',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128389954',
        'name' => 'Yerko',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Peñafiel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91875802',
        'name' => 'Angel Custodio',
        'last_name_p' => 'Lagos',
        'last_name_m' => 'Sanchez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224532709',
        'name' => 'Pedro',
        'last_name_p' => 'Liendo',
        'last_name_m' => 'Bustamante',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017979067K',
        'name' => 'Luis ',
        'last_name_p' => 'Romero ',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017131786K',
        'name' => 'Camilo',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '181706767',
        'name' => 'Emilio Antonio',
        'last_name_p' => 'Hernandez',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141137166',
        'name' => 'Jorge Alexis',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108561238',
        'name' => 'Carlos',
        'last_name_p' => 'Aravena',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130135196',
        'name' => 'Juan',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Huentulle',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158136988',
        'name' => 'John',
        'last_name_p' => 'Villar',
        'last_name_m' => 'Ojier',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185073726',
        'name' => 'Ivo Sebastian',
        'last_name_p' => 'Vergara',
        'last_name_m' => 'Vergara',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011562671K',
        'name' => 'Juan Andres',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Avila',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167065422',
        'name' => 'Oscar',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132197121',
        'name' => 'Rochard',
        'last_name_p' => 'Morgado',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187091616',
        'name' => 'Brian',
        'last_name_p' => 'Tello',
        'last_name_m' => 'Villavicencio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '97834989',
        'name' => 'Mario Segundo',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Carvajal',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016704168K',
        'name' => 'Claudio',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80602626',
        'name' => 'Omar Enrique',
        'last_name_p' => 'Guerrero',
        'last_name_m' => 'Rivero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98695664',
        'name' => 'Fernando Antonio',
        'last_name_p' => 'Cid',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116162121',
        'name' => 'Luis',
        'last_name_p' => 'Cantellano',
        'last_name_m' => 'Salas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '189194412',
        'name' => 'Matias Nicolas',
        'last_name_p' => 'Ayala',
        'last_name_m' => 'Aguirre',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012215694K',
        'name' => 'Carlos Humberto',
        'last_name_p' => 'Lizama',
        'last_name_m' => 'Paredes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73250714',
        'name' => 'Juan Bautista',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Romero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011191835K',
        'name' => 'Jose',
        'last_name_p' => 'Ortiz',
        'last_name_m' => 'Covarrubias',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156933961',
        'name' => 'Alexis Isaac',
        'last_name_p' => 'Caceres',
        'last_name_m' => 'Zepeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138701905',
        'name' => 'Juan',
        'last_name_p' => 'Ledezma',
        'last_name_m' => 'Ledezma',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150139910',
        'name' => 'Jonathan',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Ruiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145556554',
        'name' => 'Hugo',
        'last_name_p' => 'Vargas',
        'last_name_m' => 'Bravo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101897982',
        'name' => 'Marco',
        'last_name_p' => 'Zamora',
        'last_name_m' => 'Anjariz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113262044',
        'name' => 'JUAN CARLOS',
        'last_name_p' => 'MORALES',
        'last_name_m' => 'LOPEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187909333',
        'name' => 'Bernando',
        'last_name_p' => 'Bruna',
        'last_name_m' => 'Camus',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150183758',
        'name' => 'Osvaldo',
        'last_name_p' => 'Caimanque',
        'last_name_m' => 'Jeraldo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '151572146',
        'name' => 'Rodrigo Felipe',
        'last_name_p' => 'Ibarra',
        'last_name_m' => 'Ibarra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95045723',
        'name' => 'Ruben Enrique',
        'last_name_p' => 'Moya',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86568497',
        'name' => 'Glauco Alejandro',
        'last_name_p' => 'Monardes',
        'last_name_m' => 'Ramos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185068102',
        'name' => 'Andres Ignacio',
        'last_name_p' => 'Paez',
        'last_name_m' => 'Velasco',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183123785',
        'name' => 'Sebastian',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '69975887',
        'name' => 'Francisco Arturo',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Paez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '192057388',
        'name' => 'Gerson',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Carreno',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150341167',
        'name' => 'Pedro',
        'last_name_p' => 'Gahona',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '77323740',
        'name' => 'CARLOS',
        'last_name_p' => 'SAAVEDRA',
        'last_name_m' => 'SAAVEDRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '247846492',
        'name' => 'Jorge',
        'last_name_p' => 'Rios',
        'last_name_m' => 'Torres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '107319514',
        'name' => 'Rogelio',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155146540',
        'name' => 'Patricio',
        'last_name_p' => 'Mercado',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95622844',
        'name' => 'Elias',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Sanchez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '242156218',
        'name' => 'edward',
        'last_name_p' => 'mosquera',
        'last_name_m' => 'mosquera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '248968796',
        'name' => 'WILSON',
        'last_name_p' => 'MURILLO',
        'last_name_m' => 'LIMBER',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '019100244K',
        'name' => 'walter',
        'last_name_p' => 'meneses',
        'last_name_m' => 'santos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122152367',
        'name' => 'mauricio',
        'last_name_p' => 'davila',
        'last_name_m' => 'godoy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179376571',
        'name' => 'Gilbert ',
        'last_name_p' => 'Dapremont',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179376334',
        'name' => 'Ian',
        'last_name_p' => 'Sommerville',
        'last_name_m' => 'Marin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101082059',
        'name' => 'Luis Delfin ',
        'last_name_p' => 'Sepulveda',
        'last_name_m' => 'Sepulveda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165648633',
        'name' => 'Jimmy Nicolas',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Campillay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88572955',
        'name' => 'Angel',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Calderon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132305056',
        'name' => 'Zadok',
        'last_name_p' => 'Morales',
        'last_name_m' => 'Calderon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132170525',
        'name' => 'MARCO',
        'last_name_p' => 'FLORES',
        'last_name_m' => 'ANGEL',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176552492',
        'name' => 'RODRIGO IGNACIO',
        'last_name_p' => 'CHAVEZ',
        'last_name_m' => 'RAMIREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118175816',
        'name' => 'NELSON HORACIO',
        'last_name_p' => 'CORTES',
        'last_name_m' => 'PARRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122147207',
        'name' => 'Michelle',
        'last_name_p' => 'Bravo',
        'last_name_m' => 'Saravia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160609788',
        'name' => 'NELSON EDUARDO',
        'last_name_p' => 'AGUILERA',
        'last_name_m' => 'CEA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129821825',
        'name' => 'JOEL',
        'last_name_p' => 'TORRES',
        'last_name_m' => 'BURGOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132171998',
        'name' => 'Genaro Francisco',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105311915',
        'name' => 'JUAN CARLOS',
        'last_name_p' => 'RABANAL ',
        'last_name_m' => 'LUER',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187934079',
        'name' => 'CRISTIAN JORGE',
        'last_name_p' => 'GONZALEZ',
        'last_name_m' => 'DELGADO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '242017064',
        'name' => 'norman',
        'last_name_p' => 'anchico',
        'last_name_m' => 'escobar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '173730594',
        'name' => 'BYRON SANDRO',
        'last_name_p' => 'GALLARDO',
        'last_name_m' => 'SANCHEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '247940448',
        'name' => 'RODOLFO',
        'last_name_p' => 'MORALES',
        'last_name_m' => 'DAVALOS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125756131',
        'name' => 'CARLOS ALBERTO',
        'last_name_p' => 'HEREDIA',
        'last_name_m' => 'CARRASCO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134215720',
        'name' => 'CARLOS MANUEL',
        'last_name_p' => 'SMITH',
        'last_name_m' => 'PARRA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115924591',
        'name' => 'ANGEL',
        'last_name_p' => 'TAPIA',
        'last_name_m' => 'VASQUEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017217194K',
        'name' => 'YONATHAN',
        'last_name_p' => 'MULLER',
        'last_name_m' => 'JUANIDIS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '103793262',
        'name' => 'Leonardo Juan',
        'last_name_p' => 'Calibar',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187909090',
        'name' => 'Ignacio',
        'last_name_p' => 'Montenegro',
        'last_name_m' => 'Sommerville',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '75398875',
        'name' => 'Manuel',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164383318',
        'name' => 'Camilo Luis',
        'last_name_p' => 'Guzman',
        'last_name_m' => 'Pallero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150190940',
        'name' => 'David',
        'last_name_p' => 'Moreno',
        'last_name_m' => 'Munoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150215668',
        'name' => 'Pedro',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '019970074K',
        'name' => 'Daniel',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145256917',
        'name' => 'Branko Petar',
        'last_name_p' => 'Gjordan',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136438867',
        'name' => 'Ricardo Andres',
        'last_name_p' => 'Castillo ',
        'last_name_m' => 'De La Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170207009',
        'name' => 'ALEXIS JOSE',
        'last_name_p' => 'FUENTES',
        'last_name_m' => 'ESCOBAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169050716',
        'name' => 'MARCELO JAVIER',
        'last_name_p' => 'BENAVIDES',
        'last_name_m' => 'ARANEDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018869084K',
        'name' => 'DOUGLAS EDISON',
        'last_name_p' => 'OPAZO ',
        'last_name_m' => 'OLIVARES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178459376',
        'name' => 'FRANCISCO ANTONIO',
        'last_name_p' => 'ARANEDA',
        'last_name_m' => 'ARANEDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168754043',
        'name' => 'Yery',
        'last_name_p' => 'Rocha',
        'last_name_m' => 'Sanz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158848465',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Salazar',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136334433',
        'name' => 'Ivan ',
        'last_name_p' => 'Rojas ',
        'last_name_m' => 'Lazo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '242230531',
        'name' => 'Juan',
        'last_name_p' => 'Arredondo',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013013128K',
        'name' => 'Manuel',
        'last_name_p' => 'Lepe',
        'last_name_m' => 'Olivares',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161349690',
        'name' => 'Jesus',
        'last_name_p' => 'Bustos ',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114688568',
        'name' => 'Paolo',
        'last_name_p' => 'Allard',
        'last_name_m' => 'Moya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017436043K',
        'name' => 'MAIRON CESAR',
        'last_name_p' => 'MALDONADO',
        'last_name_m' => 'OJEDA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187926181',
        'name' => 'JONATHAN ESTEBAN',
        'last_name_p' => 'PEÑA',
        'last_name_m' => 'PALTA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187917697',
        'name' => 'Mauricio',
        'last_name_p' => 'Toro',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114945706',
        'name' => 'Fabian Esteban',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Ulloa',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174269203',
        'name' => 'Yamir',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '88389158',
        'name' => 'RICHARD ENRIQUE',
        'last_name_p' => 'LOBOS',
        'last_name_m' => 'PEREZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '89955351',
        'name' => 'Luis',
        'last_name_p' => 'Agullo',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131884559',
        'name' => 'ALEX FRANCISCO',
        'last_name_p' => 'BAEZA',
        'last_name_m' => 'FUENTES',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112130098',
        'name' => 'Mario ',
        'last_name_p' => 'Collihual',
        'last_name_m' => 'Palma',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '226193731',
        'name' => 'Riosinho Hugo',
        'last_name_p' => 'Choqueticlla',
        'last_name_m' => 'Mallcu',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113336986',
        'name' => 'Roberto Fernando',
        'last_name_p' => 'Duran ',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168475950',
        'name' => 'Francisco',
        'last_name_p' => 'Huircapan',
        'last_name_m' => 'Pinchulaf',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '227082372',
        'name' => 'Hector',
        'last_name_p' => 'Ignacio',
        'last_name_m' => 'Leon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016791585K',
        'name' => 'Claudio Sebastian',
        'last_name_p' => ' Silva',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170197143',
        'name' => 'Pablo Missael',
        'last_name_p' => 'Calderon',
        'last_name_m' => 'Avalos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150209188',
        'name' => 'Carlos Andres',
        'last_name_p' => 'Vargas',
        'last_name_m' => 'Martinez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '147567316',
        'name' => 'Silvestre',
        'last_name_p' => 'Quispe',
        'last_name_m' => 'LLuta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '246996814',
        'name' => 'Edgard',
        'last_name_p' => 'Hurtado',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170184564',
        'name' => 'Alexis Patricio',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Soza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123481283',
        'name' => 'David',
        'last_name_p' => 'Centellas',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193970796',
        'name' => 'Gabriel Kalem',
        'last_name_p' => 'Montalvan',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128205918',
        'name' => 'Roberto Manuel',
        'last_name_p' => 'Jil',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133814949',
        'name' => 'Vicente Antonio ',
        'last_name_p' => 'Carrasco ',
        'last_name_m' => 'Mardones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '54614780',
        'name' => 'Eduardo',
        'last_name_p' => 'Saavedra',
        'last_name_m' => 'Vera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182335851',
        'name' => 'Sebastian Gabriel',
        'last_name_p' => 'Alcayaga',
        'last_name_m' => 'Santibañez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126158564',
        'name' => 'Marco',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Sagredo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119322669',
        'name' => 'Claudio',
        'last_name_p' => 'Solis',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118090462',
        'name' => 'Jose',
        'last_name_p' => 'Flores',
        'last_name_m' => 'Sandoval',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172568998',
        'name' => 'Ignacio Ariel',
        'last_name_p' => 'Montero',
        'last_name_m' => 'Montero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122189066',
        'name' => 'Yerko',
        'last_name_p' => 'Calderon',
        'last_name_m' => 'Luna',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126995431',
        'name' => 'Gadiel Eric ',
        'last_name_p' => 'Palma ',
        'last_name_m' => 'Astudillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92287491',
        'name' => 'Francisco Eduardo',
        'last_name_p' => 'Caceres',
        'last_name_m' => 'Poblete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170932862',
        'name' => 'Marcelo',
        'last_name_p' => 'Tabilo',
        'last_name_m' => 'Tabilo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '178042149',
        'name' => 'Nelson Andrés',
        'last_name_p' => 'López ',
        'last_name_m' => 'López ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109988723',
        'name' => 'Ernesto Juan',
        'last_name_p' => 'Quispe ',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155844434',
        'name' => 'Juan Jose',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Sanchez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140645524',
        'name' => 'Ivan ',
        'last_name_p' => 'Almendra ',
        'last_name_m' => 'Alarcon ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168477600',
        'name' => 'Mauricio',
        'last_name_p' => 'Tabilo',
        'last_name_m' => 'Caceres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161360139',
        'name' => 'Leandro',
        'last_name_p' => 'Alcaino',
        'last_name_m' => 'Soto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174381313',
        'name' => 'Rodrigo ',
        'last_name_p' => 'Veas ',
        'last_name_m' => 'Saluzzi',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '96033850',
        'name' => 'MARIO',
        'last_name_p' => 'ACEVEDO',
        'last_name_m' => 'LEIVA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '76614156',
        'name' => 'Carmelo Enrique',
        'last_name_p' => 'Aguayo',
        'last_name_m' => 'San Martin',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179377853',
        'name' => 'Jorge',
        'last_name_p' => 'Tenorio',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '006386434K',
        'name' => 'HECTOR',
        'last_name_p' => 'ABURTO',
        'last_name_m' => 'EGAÑA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126138040',
        'name' => 'Jorge Nelson',
        'last_name_p' => 'Bizama',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100125781',
        'name' => 'Victor',
        'last_name_p' => 'Cancino',
        'last_name_m' => 'Ancapan',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '111490201',
        'name' => 'Jose Leonardo',
        'last_name_p' => 'Muñoz ',
        'last_name_m' => 'Mora',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '193991513',
        'name' => 'Keitel',
        'last_name_p' => 'Sapiain',
        'last_name_m' => 'Ramirez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '121186772',
        'name' => 'Carlos Sergio',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Cangana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '57954663',
        'name' => 'Juan',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Alcayaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '113843667',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Henriquez ',
        'last_name_m' => 'Constancio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81551871',
        'name' => 'Cristian',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '136193716',
        'name' => 'Jose',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Parra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '100216140',
        'name' => 'Humberto',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Acevedo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016934342K',
        'name' => 'Paolo Sebastian',
        'last_name_p' => 'Carmona',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160512482',
        'name' => 'Enrique ',
        'last_name_p' => 'Astudillo ',
        'last_name_m' => 'Carrero ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165651545',
        'name' => 'Rigoberto David',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Nuñez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145043107',
        'name' => 'Leonardo Andres',
        'last_name_p' => 'Castillo',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '146592082',
        'name' => 'Miguel',
        'last_name_p' => 'Arcaya',
        'last_name_m' => 'Bellido',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86002086',
        'name' => 'Luis Patricio',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Jeraldo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172063039',
        'name' => 'Juan',
        'last_name_p' => 'Aguilera',
        'last_name_m' => 'Belmar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '243674360',
        'name' => 'Leonel',
        'last_name_p' => 'Arce',
        'last_name_m' => 'Delgado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '221381394',
        'name' => 'Jonathan',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Neira',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150290848',
        'name' => 'Gregory',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Barraz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134217065',
        'name' => 'Rodrigo Andrés',
        'last_name_p' => 'Sepúlveda',
        'last_name_m' => 'Mery',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102068823',
        'name' => 'Jean',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102372697',
        'name' => 'Carlos',
        'last_name_p' => 'Mogro',
        'last_name_m' => 'Sanhueza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150198771',
        'name' => 'Alberto',
        'last_name_p' => 'Gordillo',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177232432',
        'name' => 'David',
        'last_name_p' => 'Cortés',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '194675690',
        'name' => 'ENZO NICOLAS',
        'last_name_p' => 'AROSTICA',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '194672233',
        'name' => 'LEONARDO ANTONIO',
        'last_name_p' => 'VALENZUELA',
        'last_name_m' => 'AGUILAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80588771',
        'name' => 'Francisco Oriel',
        'last_name_p' => 'Rodriguez',
        'last_name_m' => 'Sola',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124266033',
        'name' => 'Jaime Alfonso',
        'last_name_p' => 'Julio ',
        'last_name_m' => 'Campusano',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '130139493',
        'name' => 'Henry',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Maturana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119039169',
        'name' => 'Ricardo Alfredo',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Peña',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '142985691',
        'name' => 'Hugo',
        'last_name_p' => 'Rocha',
        'last_name_m' => 'Huenul',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124250749',
        'name' => 'Sandro Andres',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Cangana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84776394',
        'name' => 'Jose Rolando',
        'last_name_p' => 'Ancapi',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '010218842K',
        'name' => 'Guillermo',
        'last_name_p' => 'Aravena',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80732406',
        'name' => 'Marco Antonio ',
        'last_name_p' => 'Tapia ',
        'last_name_m' => 'Villalobos ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '66596117',
        'name' => 'Hector ',
        'last_name_p' => 'Rivera',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125962467',
        'name' => 'Luis',
        'last_name_p' => 'Espinoza',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187934354',
        'name' => 'Luis Antonio',
        'last_name_p' => 'Alvarado',
        'last_name_m' => 'Valdivia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172063047',
        'name' => 'Raul',
        'last_name_p' => 'Agulera',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166036712',
        'name' => 'Josue',
        'last_name_p' => 'Marillanca',
        'last_name_m' => 'Troncoso',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '011721964K',
        'name' => 'Ricardo',
        'last_name_p' => 'Yañez',
        'last_name_m' => 'Plaza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '226153551',
        'name' => 'GENARO',
        'last_name_p' => 'QUISPE',
        'last_name_m' => 'LLUTA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138639371',
        'name' => 'Nelson',
        'last_name_p' => 'Rada',
        'last_name_m' => 'Llanos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92326594',
        'name' => 'Jaime Antonio',
        'last_name_p' => 'Varas',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '108077638',
        'name' => 'Jose',
        'last_name_p' => 'San Martin',
        'last_name_m' => 'Canales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131539142',
        'name' => 'Celin Ariel',
        'last_name_p' => 'Fierro',
        'last_name_m' => 'Concha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158855585',
        'name' => 'FRANCISCO',
        'last_name_p' => 'FUENTES',
        'last_name_m' => 'ALQUINTA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '144969030',
        'name' => 'Marco Antonio',
        'last_name_p' => 'Garate',
        'last_name_m' => 'Gomez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163478269',
        'name' => 'Leonardo Andres ',
        'last_name_p' => 'Delgado ',
        'last_name_m' => 'Jeldres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017038699K',
        'name' => 'Pablo',
        'last_name_p' => 'Huanchicay',
        'last_name_m' => 'Huanchicay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101854272',
        'name' => 'Carlos',
        'last_name_p' => 'Roco',
        'last_name_m' => 'Estay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179373289',
        'name' => 'Francisco',
        'last_name_p' => 'Nunez',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162360531',
        'name' => 'Sergio ',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Urra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168749104',
        'name' => 'Carlos Ignacio',
        'last_name_p' => 'Valdes ',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114066184',
        'name' => 'Luis Armando',
        'last_name_p' => 'Zapata',
        'last_name_m' => 'Hernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161352683',
        'name' => 'Ronald',
        'last_name_p' => 'Barraza',
        'last_name_m' => 'Fuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139769252',
        'name' => 'Pablo Francisco',
        'last_name_p' => 'Jorquera',
        'last_name_m' => 'Mura',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129380896',
        'name' => 'Wilson Alberto',
        'last_name_p' => 'Segovia',
        'last_name_m' => 'Andrade',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138690075',
        'name' => 'Jonathan',
        'last_name_p' => 'Guerrero',
        'last_name_m' => 'Flores',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161341037',
        'name' => 'Pedro',
        'last_name_p' => 'Montecinos',
        'last_name_m' => 'Castañeda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168752105',
        'name' => 'Simon Alejandro',
        'last_name_p' => 'Vidaurre',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179539098',
        'name' => 'Carlos',
        'last_name_p' => 'Urbina',
        'last_name_m' => 'Belmar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170146514',
        'name' => 'Andre',
        'last_name_p' => 'Jaime',
        'last_name_m' => 'Bahamondes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184944189',
        'name' => 'Pablo',
        'last_name_p' => 'Salinas',
        'last_name_m' => 'Ordenes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164428125',
        'name' => 'Mario Jonas',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Ortiz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '118060822',
        'name' => 'Antonio',
        'last_name_p' => 'Pinto',
        'last_name_m' => 'Reyes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98190651',
        'name' => 'Daniel',
        'last_name_p' => 'Oviedo',
        'last_name_m' => 'Constanzo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131466072',
        'name' => 'JOEL',
        'last_name_p' => 'FERNANDEZ',
        'last_name_m' => 'SAEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '106190143',
        'name' => 'Hector Manuel ',
        'last_name_p' => 'Jofre',
        'last_name_m' => 'Bustos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '95756352',
        'name' => 'Albino',
        'last_name_p' => 'Burgos',
        'last_name_m' => 'Astudillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '104420192',
        'name' => 'Jaime Alberto',
        'last_name_p' => 'Briceño',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150511143',
        'name' => 'Belisario',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Bugueño',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155637250',
        'name' => 'Sebastian',
        'last_name_p' => 'Villanueva',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185081001',
        'name' => 'John',
        'last_name_p' => 'Iturrieta',
        'last_name_m' => 'Michea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '147061811',
        'name' => 'Kenn Ronald',
        'last_name_p' => 'Arce',
        'last_name_m' => 'Alanes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150223601',
        'name' => 'Lino Manuel',
        'last_name_p' => 'Leon',
        'last_name_m' => 'Poblete',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140985953',
        'name' => 'Jose',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Granata',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156742406',
        'name' => 'Cristian Alberto',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Zambra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '186809416',
        'name' => 'Claudio',
        'last_name_p' => 'Meza',
        'last_name_m' => 'Elgueta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017799197K',
        'name' => 'Eduardo',
        'last_name_p' => 'Medel',
        'last_name_m' => 'Loreto',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '147017391',
        'name' => 'Luis Marcelo',
        'last_name_p' => 'Marchese',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017388284K',
        'name' => 'Erwin Rodrigo',
        'last_name_p' => 'Ogaz',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91014289',
        'name' => 'Rene Rigoberto',
        'last_name_p' => 'Gutierrez',
        'last_name_m' => 'Barraza',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116166380',
        'name' => 'Pedro Antonio',
        'last_name_p' => 'Manque',
        'last_name_m' => 'Herrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123988310',
        'name' => 'Wiliam Eladio',
        'last_name_p' => 'Henriquez',
        'last_name_m' => 'Constancio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170379071',
        'name' => 'Jaime Aejandro',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Carpio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '179389401',
        'name' => 'Alan Alex',
        'last_name_p' => 'Alfaro',
        'last_name_m' => 'Leiva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119338786',
        'name' => 'Carlos',
        'last_name_p' => 'Flores',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165965280',
        'name' => 'Tomas',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '73551900',
        'name' => 'Francisco Javier',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133292918',
        'name' => 'Cristian Ricardo',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Elgueta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183809253',
        'name' => 'Wilson',
        'last_name_p' => 'Urbina',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '185995437',
        'name' => 'Jean',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Rocha',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '98633642',
        'name' => 'Manuel',
        'last_name_p' => 'Jorquera',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '92430480',
        'name' => 'Victor',
        'last_name_p' => 'Zepeda',
        'last_name_m' => 'Aviles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166868505',
        'name' => 'Mario Lenin',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Alcayaga',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91897792',
        'name' => 'Eduardo Octavio',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Toro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131769660',
        'name' => 'Patricio Del Carmen',
        'last_name_p' => 'Sierra',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '188263607',
        'name' => 'Jimmy',
        'last_name_p' => 'Cuevas',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175912940',
        'name' => 'Francisco Isarael Matias',
        'last_name_p' => 'Vidal',
        'last_name_m' => 'Rozas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167678645',
        'name' => 'Leonardo',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '114677116',
        'name' => 'Omar',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133314083',
        'name' => 'Cristian Patricio',
        'last_name_p' => 'Olivares',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '164360962',
        'name' => 'Manuel Jesus',
        'last_name_p' => 'Ampuero',
        'last_name_m' => 'Avalos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224787065',
        'name' => 'Juan',
        'last_name_p' => 'Guardamino',
        'last_name_m' => 'Fuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158126699',
        'name' => 'Francisco',
        'last_name_p' => 'Miranda',
        'last_name_m' => 'Mercado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124434068',
        'name' => 'Cristian',
        'last_name_p' => 'Mranda',
        'last_name_m' => 'Mercado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '133277986',
        'name' => 'Hernan Patricio',
        'last_name_p' => 'Zamorano',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126134533',
        'name' => 'Marco Antonio',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158879123',
        'name' => 'JOSE',
        'last_name_p' => 'GUERRA',
        'last_name_m' => 'VECILLA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143859606',
        'name' => 'JUAN',
        'last_name_p' => 'PINILLA',
        'last_name_m' => 'VEGA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141386417',
        'name' => 'Patricio Antonio ',
        'last_name_p' => 'Trigo',
        'last_name_m' => 'Ibarra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150236436',
        'name' => 'Mauricio Hernan',
        'last_name_p' => 'Iturrieta',
        'last_name_m' => 'Carmona',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176360038',
        'name' => 'Franco',
        'last_name_p' => 'Vergara',
        'last_name_m' => 'Guerra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145833396',
        'name' => 'Patricio',
        'last_name_p' => 'Urrutia',
        'last_name_m' => 'Cabrera',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174377510',
        'name' => 'Marcelo',
        'last_name_p' => 'Diaz',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017975147K',
        'name' => 'Gerardo',
        'last_name_p' => 'Vasquez',
        'last_name_m' => 'Guzman',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '80643969',
        'name' => 'Victor',
        'last_name_p' => 'Martinez',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '102143523',
        'name' => 'Eric',
        'last_name_p' => 'Tirado',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '008866695K',
        'name' => 'Christian',
        'last_name_p' => 'Videla',
        'last_name_m' => 'Fuentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141140450',
        'name' => 'Cristian',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Zuvic',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123819926',
        'name' => 'Leopoldo',
        'last_name_p' => 'Fierro',
        'last_name_m' => 'Villarroel',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '141105809',
        'name' => 'Roberto Antonio',
        'last_name_p' => 'Quiroga',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '68366968',
        'name' => 'Osvaldo',
        'last_name_p' => 'Saavedra',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170201949',
        'name' => 'Juan Francisco ',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '137490153',
        'name' => 'Eduardo',
        'last_name_p' => 'Alvarez',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '91129450',
        'name' => 'Javier',
        'last_name_p' => 'Lermanda',
        'last_name_m' => 'Burgos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170674421',
        'name' => 'Fabián',
        'last_name_p' => 'Adams',
        'last_name_m' => 'Cocio',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '154109838',
        'name' => 'Daniel Alejandro',
        'last_name_p' => 'Maripangue',
        'last_name_m' => 'Pallauta',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '224063253',
        'name' => 'Roberto Adrian',
        'last_name_p' => 'Vissani',
        'last_name_m' => '.',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169278172',
        'name' => 'Alan',
        'last_name_p' => 'Carvajal',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '012691151-3',
        'name' => 'Fernando andres',
        'last_name_p' => 'Melo',
        'last_name_m' => 'miranda',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017387633-5',
        'name' => 'Carlos',
        'last_name_p' => 'Gomez',
        'last_name_m' => 'galdames',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '014457421-4',
        'name' => 'Ruben Jaime',
        'last_name_p' => 'Santa Cruz',
        'last_name_m' => 'Cabezas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007367179-5',
        'name' => 'Hector Jaime',
        'last_name_p' => 'Santibañez',
        'last_name_m' => 'Tapia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '013426315-6',
        'name' => 'Gonzalo',
        'last_name_p' => 'Lago',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016051322-5',
        'name' => 'Lixy Jaqueline',
        'last_name_p' => 'Ortiz',
        'last_name_m' => 'Chavez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '000000000-0',
        'name' => '--',
        'last_name_p' => '--',
        'last_name_m' => '--',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
        
        

    }
}
