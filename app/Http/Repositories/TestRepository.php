<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories;

use App\Core\RequestApi;
use App\Core\TatucoRepository;
use App\Models\Test;

class TestRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Test());
    }

    public function index($request = null)
    {
        $response = RequestApi::performRequest('GET', env('API_XTREME').'/getPrueba');
        return $response;
    }

    public function store($data)
    {
        $response = RequestApi::performRequest('POST', env('API_XTREME').'/createPrueba', $data, ['Accept' => 'application/json']);
        return $response;
    }

    public function update($id, $data)
    {
        $response = RequestApi::performRequest('PUT', env('API_XTREME').'/updatePrueba/'.$id, $data, ['Accept' => 'application/json']);
        return $response;
    }

    public function getRickAndMortyapi($id) {
        $response = RequestApi::performRequest('GET', env('API_RICK_AND_MORTY').'/'.$id);
        return $response;
    }


}
