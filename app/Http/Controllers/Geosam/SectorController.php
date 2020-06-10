<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\SectorService;
//use App\Http\Services\SectorDynamoService as SectorService;

class SectorController extends TatucoController
{
    protected $validateStore = [
        'code' => 'required|string|max:40',
        'high' => 'integer',
        'width' => 'integer',
        'type_rack_id' => 'integer',
        'account_id' => 'required|integer'
    ];

    public function __construct()
    {
        parent::__construct(new SectorService());
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    public function findRacks($id)
    {
        return $this->service->findRacks($id);
    }

    public function updateImportBoxes($id, Request $request) {
        return $this->service->updateImportBoxes($id, $request);
    }

    public function updateReferences($id, Request $request) {
        return $this->service->updateReferences($id, $request);
    }

    public function updateRack($id, Request $request) {
        return $this->service->updateRack($id, $request);
    }

}
