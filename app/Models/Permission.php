<?php

namespace App\Models;

use App\Utils\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    use HasUuids;

    public const NAME = "name";
    public const GROUP = "group";
    public const LABEL = "label";
    public const ENTITY = "entity";
    public const DESCRIPTION = "description";

    public const TABLE = "tb_co_permissions";

    protected $table = Permission::TABLE;

    protected $fillable = [
        MigrationUtil::ID,
        Permission::NAME,
        Permission::LABEL,
        Permission::GROUP,
        Permission::ENTITY,
        Permission::DESCRIPTION,
        MigrationUtil::CREATED_BY,
        MigrationUtil::CREATED_AT,
        MigrationUtil::UPDATED_BY,
        MigrationUtil::UPDATED_AT,
        MigrationUtil::DELETED_BY,
        MigrationUtil::DELETED_AT,
    ];

}
