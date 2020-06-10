<?php


namespace App\Models;

use BaoPham\DynamoDb\DynamoDbModel;

class SectorDynamo extends DynamoDbModel
{
    protected $primaryKey = 'id';

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

}
