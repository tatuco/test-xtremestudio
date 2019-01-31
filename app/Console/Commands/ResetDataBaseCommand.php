<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 04/09/18
 * Time: 01:28 PM
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ResetDataBaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tatuco:db {db}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear Base de Datos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($this->argument('db'))
        {
            DB::statement('CREATE DATABASE "'.$this->argument('db').'"');
            $this->info('Creando Base de Datos Postgresql ...');
            $this->info('Base de datos : '.$this->argument('db').' creada.');
        }else{
            DB::statement('CREATE DATABASE "'.env('DB_DATABASE').'"');
            $this->info('Creando Base de Datos Postgresql ...');
            $this->info('Base de datos : '.env('DB_DATABASE').' creada.');
        }

        $this->info('Ejecutando Migraciones ...');
        Artisan::call('migrate');
        $this->info('Migracion de la Base de Datos Existosa');

        $this->info('Ejecutando Seeders');
        Artisan::call('db:seed');
        $this->info('Data Insertada.');


    }

}