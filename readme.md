# Laravel API 


### Instalacion
Clonar el repositorio. comandos:

```sh
$ cd carpeta-del-proyecto
$ composer install
$ php -S 0.0.0.0:8000 -t public
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
    "version": "5.8.37",
    "time": {
        "date": "2018-08-22 20:07:17.618814",
        "timezone_type": 3,
        "timezone": "UTC"
    }
}
```

### EndPoints 
|   Metodo       |      Ruta               |    data                                             | Descripcion
| -------------  | -------------           | --------------------------------------------------- | -----------------               
|      GET       |       /api/tests        |                                                     |   devuelve un objeto donde la propiedad data es el array con lo items traidos del api xtremestudio 
|      POST      |       /api/tests        |    {id: 1}                                          |   busca el id en el api rickandmortyapi, si no existe el item con ese id, devuelve 404; si existe hace un merge al request de la propiedad 'observations' y guarda, la key "id" es requerida, y el que campo name, es unico en el api xtremestudio
|      PUT       |     /apit/tests/{id}    |   {name: "nuevo name", status: "nuevo status}       |   update del id enviado por la ruta, campos status y name requeridos



### License

MIT License Luis.
