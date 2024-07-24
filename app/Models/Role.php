<?php

namespace App\Models;

use Laratrust\Models\Role as RoleModel;

class Role extends RoleModel
{
    public $guarded = [];

    const ADMIN = 'admin';
    const USER = 'client';

    // Role IDs
    const ADMIN_ROLE = 1;
    const USER_ROLE = 2;

    public static function initialRoles()
    {
        return [
            Role::ADMIN,
            Role::USER,
        ];
    }
}
