<?php

namespace App\Enums\Permissions;

use App\Components\PermissionGroupOption;
use App\Models\Permission;

class PermissionEnum{

    public const PERMISSION_VIEW = "PERMISSION_VIEW";
    public const PERMISSION_STORE = "PERMISSION_STORE";
    public const PERMISSION_UPDATE = "PERMISSION_UPDATE";
    public const PERMISSION_DELETE = "PERMISSION_DELETE";

    public static function values(){
        return [
            new Permission([Permission::NAME => PermissionEnum::PERMISSION_VIEW, Permission::LABEL => "ver permissão", Permission::DESCRIPTION => "permite visualizar as permissões", Permission::GROUP => PermissionGroupOption::VIEW, Permission::ENTITY => Permission::TABLE]),
            new Permission([Permission::NAME => PermissionEnum::PERMISSION_STORE, Permission::LABEL => "criar permissão", Permission::DESCRIPTION => "permite cadastrar uma permissão", Permission::GROUP => PermissionGroupOption::STORE, Permission::ENTITY => Permission::TABLE  ]),
            new Permission([Permission::NAME => PermissionEnum::PERMISSION_UPDATE, Permission::LABEL => "editar permissão", Permission::DESCRIPTION => "permite actualizar os dados uma permissão", Permission::GROUP => PermissionGroupOption::UPDATE, Permission::ENTITY => Permission::TABLE ]),
            new Permission([Permission::NAME => PermissionEnum::PERMISSION_DELETE, Permission::LABEL => "apagar permissão", Permission::DESCRIPTION => "permite eliminar uma permissão", Permission::GROUP => PermissionGroupOption::DELETE, Permission::ENTITY => Permission::TABLE ]),
         ];
    }

}
