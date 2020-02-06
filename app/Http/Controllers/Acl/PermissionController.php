<?php

namespace App\Http\Controllers\Acl;


use App\Acl\Src\Models\Permission;
use App\Acl\Src\Models\Role;
use App\Core\TatucoController;
use Illuminate\Http\Request;
use App\Http\Services\Acl\PermissionService;

class PermissionController extends TatucoController
{
    protected $select = [
        "id",
        "name",
        "slug"
    ];

    public function __construct()
    {
        parent::__construct(new PermissionService());
    }


}
