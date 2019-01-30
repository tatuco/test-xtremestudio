<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories\Acl;

use App\Acl\Src\Models\Permission;
use App\Core\TatucoRepository;

class PermissionRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new Permission());
    }

}