<?php

use App\Models\Role;
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
        Schema::create(Role::TABLE, function (Blueprint $table) {
            MigrationUtil::primaryKey($table);
            $table->string(Role::NAME)->unique();
            $table->string(Role::LABEL);
            $table->text(Role::DESCRIPTION);
            MigrationUtil::commonAttribute($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Role::TABLE);
    }
};
