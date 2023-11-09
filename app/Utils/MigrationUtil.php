<?php

namespace App\Utils;

use Illuminate\Database\Schema\Blueprint;

class MigrationUtil{

    public const ID = "id";
    public const CREATED_BY = "created_by";
    public const CREATED_AT = "created_at";
    public const UPDATED_BY = "updated_by";
    public const UPDATED_AT = "updated_at";
    public const DELETED_BY = "deleted_by";
    public const DELETED_AT = "deleted_at";


    public static function commonAttribute(Blueprint $table){
        $table->timestamps();
        $table->uuid(MigrationUtil::CREATED_BY)->nullable();
        $table->uuid(MigrationUtil::UPDATED_BY)->nullable();
        $table->uuid(MigrationUtil::DELETED_BY)->nullable();
        $table->dateTime(MigrationUtil::DELETED_AT)->nullable();
    }

    public static function primaryKey(Blueprint $table){
        $table->uuid(MigrationUtil::ID)->primary();
    }

}
