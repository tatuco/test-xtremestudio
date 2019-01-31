<?php

namespace App\Http\Services\Acl;

use App\Acl\Src\Models\Permission;
use App\Core\TatucoService;
use App\Http\Repositories\Acl\PermissionRepository;

class PermissionService extends TatucoService
{

    protected $name = "param";
    protected $namePlural = "params";

    public function __construct()
    {
        parent::__construct(new PermissionRepository());
    }
	
}