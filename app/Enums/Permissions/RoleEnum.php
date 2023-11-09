<?php

namespace App\Utils\Permissions;

use App\Components\PermissionGroupOption;
use App\Models\Permission;
use App\Models\Role;

class RoleEnum{

    public const PERMISSION_ROLE_VIEW = "PERMISSION_ROLE_VIEW";
    public const PERMISSION_ROLE_STORE = "PERMISSION_ROLE_STORE";
    public const PERMISSION_ROLE_UPDATE = "PERMISSION_ROLE_UPDATE";
    public const PERMISSION_ROLE_DELETE = "PERMISSION_ROLE_DELETE";

    public static function values(){
        return [
            new Permission([Permission::NAME => RoleEnum::PERMISSION_ROLE_VIEW, Permission::LABEL => "ver cargos", Permission::DESCRIPTION => "permite visualizar os cargos", Permission::GROUP => PermissionGroupOption::VIEW, Permission::ENTITY => Role::TABLE ]),
            new Permission([Permission::NAME => RoleEnum::PERMISSION_ROLE_STORE, Permission::LABEL => "criar cargo", Permission::DESCRIPTION => "permite cadastrar um cargo", Permission::GROUP => PermissionGroupOption::STORE, Permission::ENTITY => Role::TABLE ]),
            new Permission([Permission::NAME => RoleEnum::PERMISSION_ROLE_UPDATE, Permission::LABEL => "editar cargo", Permission::DESCRIPTION => "permite actualizar os dados um cargo", Permission::GROUP => PermissionGroupOption::UPDATE, Permission::ENTITY => Role::TABLE ]),
            new Permission([Permission::NAME => RoleEnum::PERMISSION_ROLE_DELETE, Permission::LABEL => "apagar cargo", Permission::DESCRIPTION => "permite eliminar um cargo", Permission::GROUP => PermissionGroupOption::DELETE, Permission::ENTITY => Role::TABLE ]),
        ];
    }

}
