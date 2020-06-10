<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Rack extends TatucoModel
{
    protected $guarded = ['id'];

    protected $casts = [
        'boxes' => 'json',
        "deleted" => 'boolean',

    ];

    protected $fillable = [
        "name",
        "probe",
        "boxes",
        "sector_id",
        "account_id",
        'hall',
        'columna',
        'lot'
    ];

    public static function table()
    {
        return with(new static)->table;
    }

    public static function insertAll(array $items)
    {
        $now = \Carbon\Carbon::now();
        $items = collect($items)->map(function (array $data) use ($now) {
            //echo json_encode($data["boxes"]);
            return /*$this->timestamps ?*/ array_merge([
                'created_at' => $now,
                'updated_at' => $now,
                'boxes' => json_encode($data["boxes"])
            ], [
                "id" => $data["id"],
                "sector_id" => $data["sector_id"],
                "hall" => $data["hall"],
                "lot" => $data["lot"],
                "columna" => $data["columna"],
                "account_id" => $data["account_id"],
                "boxes" => json_encode($data["boxes"])
            ]);/* : $data;*/
        })->all();

        return \DB::table("racks")->insert($items);
    }
}
