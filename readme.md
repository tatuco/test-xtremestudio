# Laravel API 


### Instalacion
Clonar el repositorio. comandos:

```sh
$ cd carpeta-del-proyecto
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
#### Do Where:
El doWhere es una parametro enviado atraves de la url hacia la api, con el objetivo de filtrar,
 las consultas desde el cliente, evitando crear endpoints sin fin para cada cosa, Ejemplo: 

```sh
/api/users?where=[{"op": "eq", "field": "id", "value": 1}]
```
- Esto seria el quivalente a :
```sh
 SELECT * FROM users WHERE id = 1;
```
 - donde op representa el operador (<, >, = ...) field representa la columna y value el valor que queremos obtener.
### Operadores 


|   Operador    |    Simbolo    | Descripcion |
| ------------- | ------------- | ----------- |          
|      ct       |       like    |   '%luis%'  |
|      sw       |       like    |   'lu%'     |
|      ew       |       like    |   '%is'     |
|      eq       |       =       |             |
|      gt       |       >       |             |
|      gte      |       >=      |             |
|      lte      |       <=      |             |
|      lt       |       <       |             |
|      in       |       in      |             |
|      bt       |       entre   |             |

- por default el operador es "eq", tambien podemos agregar tantas condiciones como queramos:
```sh
 where=[{"op":"bt","field":"id","value":[1,3],"filter":"and"},{"op":"in","field":"id","value":[5,9],"filter":"or"},{"op":"eq","field":"id","value":4,"filter":"or"}]
```
traduccion SQL:
```sh
 SELECT * FROM users WHERE id BETWEEN 1 AND 3 AND id IN (5, 9) OR id = 4;
```
- Ordenamiento: 
 ```sh
    &order=["id","desc"]    
  ```
 - Relaciones:
 ```sh
 &join=[{"table":"users","fk":"role.user_id","pk":"users.id","type":"inner"}]
   ```
  - Especificar columnas, por defecto es ['*']:
   ```sh
    &columns=["id as cedula", "name as Nombre"];
  ```
  - Filtros por fechas: solo de debe agregar al where la propiedad "type" (date, year, month, day, time)
   ```sh
    /api/users?where=[{"op": "eq", "field": "date_created", "value": "2019-01-22", "type": "date"}]
    ```
### License

MIT License Luis.
