<?php

namespace App\Models;

use App\Utils\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    use HasUuids;

    public const NAME = "name";
    public const LABEL = "label";
    public const DESCRIPTION = "description";

    public const TABLE = "tb_co_roles";

    protected $table = Permission::TABLE;

    protected $fillable = [
        MigrationUtil::ID,
        Role::NAME,
        Role::LABEL,
        Role::DESCRIPTION,
        MigrationUtil::CREATED_BY,
        MigrationUtil::CREATED_AT,
        MigrationUtil::UPDATED_BY,
        MigrationUtil::UPDATED_AT,
        MigrationUtil::DELETED_BY,
        MigrationUtil::DELETED_AT,
    ];

}
