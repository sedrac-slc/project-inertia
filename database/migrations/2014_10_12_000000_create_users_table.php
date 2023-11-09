<?php

use App\Components\GenderOption;
use App\Models\User;
use App\Utils\MigrationUtil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(User::TABLE, function (Blueprint $table) {
            MigrationUtil::primaryKey($table);
            $table->string(User::NAME);
            $table->string(User::EMAIL)->unique();
            $table->string(User::PASSWORD);
            $table->string(User::PHONE);
            $table->date(User::BIRTHDAY);
            $table->timestamp(User::EMAIL_VERIFIED_AT)->nullable();
            $table->enum(User::GENDER, GenderOption::factory()->values())
                  ->default(GenderOption::OTHER);
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string(User::PROFILE_PHOTO_URL, 2048)->nullable();
            MigrationUtil::commonAttribute($table);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(User::TABLE);
    }
};
