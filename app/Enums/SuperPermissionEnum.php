<?php

namespace App\Enums;

use App\Enums\Permissions\{
    GeneralPermissionEnum,
    PermissionEnum,
    RolePermissionEnum,
    UserPermissionEnum
};

class SuperPermissionEnum{

    public static function values(){
        return array_merge(
            GeneralPermissionEnum::values(),
            PermissionEnum::values(),
            RolePermissionEnum::values(),
            UserPermissionEnum::values(),
        );
    }

}
