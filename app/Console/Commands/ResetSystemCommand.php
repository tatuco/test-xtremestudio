<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 04/09/18
 * Time: 01:32 PM
 */

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;

class ResetSystemCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tatuco:install';

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
        try{
            DB::connection();
        }catch (\Exception $e){
            $this->error('Coneccion con la base de datos desabilitada');
            $this->error('Verifique las credenciales de usuario para a base de datos');
            return;
        }

        $database = env('DB_DATABASE', false);

        if (!$database) {
            $this->info('Debes establecer una base de datos en la variable DB_DATABASE del archivo .env');
            return;
        }

        try {
            $pdo = $this->getPDOConnection(env('DB_HOST'), env('DB_PORT'), env('DB_USERNAME'), env('DB_PASSWORD'));

          /*  $pdo->exec(sprintf(
                'DROP IF EXISTS DATABASE %s;',
                $database
            ));*/

           $pdo->exec(sprintf(
                'CREATE DATABASE %s;',
                $database
            ));

            $this->info(sprintf('Base de Datos %s creada', $database));

            $this->info('Ejecutando Migraciones ...');
            Artisan::call('migrate');
            $this->info('Migracion de la Base de Datos Existosa');

            $this->info('Ejecutando Seeders');
            Artisan::call('db:seed');
            $this->info('Data Insertada.');

        } catch (PDOException $exception) {
            $this->error(sprintf('Fallo la creacion de %s database, %s', $database, $exception->getMessage()));
        }


    }

    private function getPDOConnection($host, $port, $username, $password)
    {
        return new PDO(sprintf('pgsql:host=%s;port=%d;', $host, $port), $username, $password);
    }
}