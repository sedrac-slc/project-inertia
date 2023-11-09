<?php

use App\Components\PermissionGroupOption;
use App\Models\Permission;
use App\Utils\MigrationUtil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Permission::TABLE, function (Blueprint $table) {
            MigrationUtil::primaryKey($table);
            $table->string(Permission::NAME)->unique();
            $table->string(Permission::LABEL);
            $table->string(Permission::ENTITY);
            $table->text(Permission::DESCRIPTION);
            $table->enum(Permission::GROUP,PermissionGroupOption::factory()->values())
                  ->default(PermissionGroupOption::NONE);
            MigrationUtil::commonAttribute($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Permission::TABLE);
    }
};
