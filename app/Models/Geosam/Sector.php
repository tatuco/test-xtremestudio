<?php

namespace App\Models;

//use App\Query\QueryBuilder;
//use Illuminate\Database\Eloquent\Model;
//use App\Core\TatucoModel;
//use DB;

use App\Query\QueryBuilder;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Tymon\JWTAuth\Facades\JWTAuth;

class Sector extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'sectors';
    protected $guarded = [];
    protected $dates = ['created_at'];
  /*  protected $fillable = [
        'account_id',
        'type_rack_id',
        'code',
        'width',
        'high',
        'racks',
        'norte',
        'sur'
    ];*/

    public function scopeDoWhere($query, $request) {
        $accountId = env("ACCOUNT_ID", 1);
        $user = JWTAuth::parseToken()->authenticate();
        $list = QueryBuilder::for(static::class)
            ->doWhere($this->getWhere($request))
            ->where("deleted", false);
      /*  if ($user->account_id != $accountId) {
            $list->where("account_id", $user->account_id);
        }*/

        return $list;
    }

    public function getWhere($request)
    {
        $where = null;
        if(isset($_GET['where']))
        {
            $where = $request->where;
        }

        return $where;
    }

}

/*

class Sector extends TatucoModel
{
    protected $guarded = ['id'];

    protected $casts = [
        "deleted" => "boolean",
        'racks' => 'json',
        'id' => 'string'
    ];

    protected $fillable = [
        'account_id',
        'type_rack_id',
        'code',
        'width',
        'high',
        'racks',
        'norte',
        'sur'
    ];

    public static function table()
    {
        return with(new static)->table;
    }

    public static function insertAll(array $items)
    {
        $now = \Carbon\Carbon::now();
        $items = collect($items)->map(function (array $data) use ($now) {
            return  array_merge([
                'created_at' => $now,
                'updated_at' => $now,
            ], $data);
        })->all();

        return \DB::table(static::table())->insert($items);
    }

    static function generatorRecorrido($alto, $ancho)
    {
        $total = $alto * $ancho;
        $cont = 1;
        $obj = [];
        $recorrido = [];
        for ($i = 0; $i <= $total; $i++) {
            if ($cont <= $alto) {
                if ($cont == 1) {
                    $obj["inicio"] = $i;
                }
                if ($cont == $alto) {
                    $obj["fin"] = $i;
                    array_push($recorrido, $obj);
                    $cont = 1;
                }
                $cont++;
            } else {
                $cont = 1;
                $obj["inicio"] = $i;
            }
        }
        return $recorrido;
    }

    public function scopefindRacks($query, $id)
    {
        return QueryBuilder::for(Rack::class)
            ->where('sector_id', $id)
            ->where('deleted', false)
            ->get();
    }

    public function racks() {
        return $this->hasMany(Rack::class, 'sector_id', 'id');
    }

    public function type_racks() {
        return $this->belongsTo(TypeRack::class, 'type_rack_id', 'id');
    }
}*/
