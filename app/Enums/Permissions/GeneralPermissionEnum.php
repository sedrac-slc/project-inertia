<?php

namespace App\Enums\Permissions;

use App\Components\PermissionGroupOption;
use App\Models\Permission;

class GeneralPermissionEnum{

    public const PERMISSION_SUPER = "PERMISSION_SUPER";
    public const PERMISSION_DEV = "PERMISSION_DEV";
    public const PERMISSION_ADMIN = "PERMISSION_ADMIN";

    public static function values()
    {
        return [
            new Permission([Permission::NAME => GeneralPermissionEnum::PERMISSION_SUPER, Permission::LABEL => "permissão super utilizador", Permission::DESCRIPTION => "permite o acesso total para os super usuários", Permission::GROUP => PermissionGroupOption::SPECIAL]),
            new Permission([Permission::NAME => GeneralPermissionEnum::PERMISSION_DEV, Permission::LABEL => "permissão desenvolvedor", Permission::DESCRIPTION => "permite o acesso total para os desenvolvedores", Permission::GROUP => PermissionGroupOption::SPECIAL]),
            new Permission([Permission::NAME => GeneralPermissionEnum::PERMISSION_ADMIN, Permission::LABEL => "criar permissão", Permission::DESCRIPTION => "permite o acesso total para administradores", Permission::GROUP => PermissionGroupOption::SPECIAL]),
        ];
    }

}
