<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class TypeRack extends TatucoModel
{
    protected $guarded = ['id'];
    protected $fillable = [
        "name",
        "quantity",
        "floors",
        "account_id"
    ];
    /*  public function getObjectBox($type) {
          switch ($type) {
              case 1:
                  return [
                      [

                      ],
                  ];
              break;
              case 2:
                  return [];
              break;
              case 3:
                  return [];
              break;
          }
      }*/
    /**
     * como identificar las cajas dentro del json, que id manegar
     */


}
