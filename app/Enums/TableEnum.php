<?php

namespace App\Enums;

use App\Models\{
    Permission,
    Role,
    User
};

class TableEnum{

    public const ROLE = Role::TABLE;
    public const USER = User::TABLE;
    public const PERMISSION = Permission::TABLE;

    public static function values() {
        return [
            TableEnum::ROLE,
            TableEnum::USER,
            TableEnum::PERMISSION
        ];
    }

}
