<?php

namespace App\Utils\Permissions;

use App\Components\PermissionGroupOption;
use App\Models\Permission;
use App\Models\User;

class UserEnum{

    public const PERMISSION_USER_VIEW = "PERMISSION_USER_VIEW";
    public const PERMISSION_USER_STORE = "PERMISSION_USER_STORE";
    public const PERMISSION_USER_UPDATE = "PERMISSION_USER_UPDATE";
    public const PERMISSION_USER_DELETE = "PERMISSION_USER_DELETE";

    public static function values(){
        return [
            new Permission([Permission::NAME => UserEnum::PERMISSION_USER_VIEW, Permission::LABEL => "ver utilizador", Permission::DESCRIPTION => "permite visualizar os utilizadores", Permission::GROUP => PermissionGroupOption::VIEW, Permission::ENTITY => User::TABLE ]),
            new Permission([Permission::NAME => UserEnum::PERMISSION_USER_STORE, Permission::LABEL => "criar utilizador", Permission::DESCRIPTION => "permite cadastrar um utilizadores", Permission::GROUP => PermissionGroupOption::STORE, Permission::ENTITY => User::TABLE ]),
            new Permission([Permission::NAME => UserEnum::PERMISSION_USER_UPDATE, Permission::LABEL => "editar utilizador", Permission::DESCRIPTION => "permite actualizar os dados um utilizadores", Permission::GROUP => PermissionGroupOption::UPDATE, Permission::ENTITY => User::TABLE ]),
            new Permission([Permission::NAME => UserEnum::PERMISSION_USER_DELETE, Permission::LABEL => "apagar utilizador", Permission::DESCRIPTION => "permite eliminar um utilizadores", Permission::GROUP => PermissionGroupOption::DELETE, Permission::ENTITY => User::TABLE ]),
        ];
    }

}
