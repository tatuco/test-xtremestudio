# Laravel API 


### Instalacion
Clonar el repositorio. comandos:

```sh
$ cd core-lumen
$ cp .env.example .env
$ php artisan key:generate
```

Crear la Base de Datos y colocar el nombre en la variable de entorno DB_DATABASE `.env` . Correr los comandos:

```sh
$ php artisan migrate --seed
```


#### Get api:
probar endpoint ``/api/``:

```sh
curl -X GET \
  http://127.0.0.1:8000/api/ \
  -H 'Content-Type: application/json' \
```

Response:

```json
{
    "version": "Laravel Components 5.7.*",
    "time": {
        "date": "2018-08-22 20:07:17.618814",
        "timezone_type": 3,
        "timezone": "UTC"
    }
}
```

Crear Modelo
correr el comando con all creara :
controller, migration, service, model y repository de esa entidad 
```sh
$ php artisan generator:tatuco Entity all


```

Validaciones:
```sh
// al guardar
 protected $validateStore = [
        'name' => 'required|max:255',
        'description' => 'required',
    ];
  //al actualizar
   protected $validateUpdate = [
          'name' => 'required|max:255',
          'description' => 'required',
      ];  

```

ir a App/Core/TatucoController.php para establecer en la siguiente propiedad, las validaciones para todo el mundo
```sh
protected $validateDefault = [];

```
### License

MIT License Luis.
