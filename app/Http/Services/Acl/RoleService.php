<?php

namespace App\Http\Services\Acl;

use App\Core\TatucoService;
use App\Http\Repositories\Acl\RoleRepository;

class RoleService extends TatucoService
{

    protected $name = "role";
    protected $namePlural = "roles";

    public function __construct()
    {
        parent::__construct(new RoleRepository());
    }


}