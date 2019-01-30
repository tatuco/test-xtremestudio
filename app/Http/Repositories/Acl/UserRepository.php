<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:35 PM
 */

namespace App\Http\Repositories\Acl;

use App\Core\TatucoRepository;
use App\Models\User;

class UserRepository extends TatucoRepository
{

    public function __construct()
    {
        parent::__construct(new User());
    }

}