<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 06/08/18
 * Time: 03:11 PM
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generator:tatuco {name} {exceptions}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generador de modelo con Repositorio, controller y servicio';

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
        try {
            $name = $this->argument('name');
            $exceptions = $this->argument('exceptions');
            strpos($exceptions, ',');
            if($exceptions == 'all')
            {
                $this->controller($name);
                $this->service($name);
                $this->repository($name);
                $this->model($name);
                $this->migration($name);

            }else{
                $array = explode(",", $exceptions);
                foreach ($array as $a)
                {
                    switch ($a) {

                        case 'controller':
                            $this->controller($name);
                            break;
                        case 'service':
                            $this->service($name);
                            break;
                        case 'repository':
                            $this->repository($name);
                            break;
                        case 'model':
                            $this->model($name);
                            break;
                        case 'migration':
                            $this->migration($name);
                            break;

                    }
                }
            }

            $this->getBr($name);

            File::append(base_path('routes/api.php'), 'Route::get(\'' . str_plural(strtolower($name)) . "', '{$name}Controller@index');\n");
            File::append(base_path('routes/api.php'), 'Route::get(\'' . str_plural(strtolower($name)) . "/{id}', '{$name}Controller@show');\n");
            File::append(base_path('routes/api.php'), 'Route::post(\'' . str_plural(strtolower($name)) . "', '{$name}Controller@store');\n");
            File::append(base_path('routes/api.php'), 'Route::put(\'' . str_plural(strtolower($name)) . "/{id}', '{$name}Controller@update');\n");
            File::append(base_path('routes/api.php'), 'Route::delete(\'' . str_plural(strtolower($name)) . "/{id}', '{$name}Controller@destroy');\n");

        } catch (\Exception $e) {
            return "${$e}";
        }
    }

    protected function model($name)
    {
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Model')
        );

        file_put_contents((app()->basePath()."/app/Models/{$name}.php"), $modelTemplate);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents((app()->basePath()."/app/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }

    protected function migration($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}',
                '{{modelNamePlural}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name),
                $this->camel_to_snake($name)
            ],
            $this->getStub('Migration')
        );

        $migration = $this->getDatePrefix()."_create_".$this->camel_to_snake($name)."_table.php";

        file_put_contents((app()->basePath()."/database/migrations/{$migration}"), $controllerTemplate);
    }

    protected function getDatePrefix()
    {
        return date('Y_m_d_His');
    }

    protected function service($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('Service')
        );

        file_put_contents((app()->basePath()."/app/Http/Services/{$name}Service.php"), $controllerTemplate);    }

    protected function repository($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('Repository')
        );

        file_put_contents((app()->basePath()."/app/Http/Repositories/{$name}Repository.php"), $controllerTemplate);    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("Generator/stubs/$type.stub"));
    }

    protected function getBr($name)
    {
        File::append(base_path('routes/api.php'), " \n");
        File::append(base_path('routes/api.php'), "/** routes para ${name} **/ \n");
        File::append(base_path('routes/api.php'), " \n");
    }

    protected function camel_to_snake($input)
    {
        if ( preg_match ( '/[A-Z]/', $input ) === 0 ) { return $input; }
        $pattern = '/([a-z])([A-Z])/';
        $r = strtolower ( preg_replace_callback ( $pattern, function ($a) {
            return $a[1] . "_" . strtolower ( $a[2] );
        }, $input ) );
        return $r;
    }
}
