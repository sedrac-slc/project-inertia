<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Utils\MigrationUtil;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasUuids;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    public const NAME = "name";
    public const EMAIL = "email";
    public const GENDER = "gender";
    public const BIRTHDAY = "birthday";
    public const PHONE = "phone";
    public const PASSWORD = "password";
    public const REMEMBER_TOKEN = 'remember_token';
    public const EMAIL_VERIFIED_AT = "email_verified_at";
    public const PROFILE_PHOTO_URL = "profile_photo_url";
    public const TWO_FACTOR_SECRET = 'two_factor_secret';
    public const TWO_FACTOR_RECOVERY_CODES ='two_factor_recovery_codes';

    public const TABLE = "users";

    protected $table = User::TABLE;


    protected $fillable = [
        MigrationUtil::ID,
        User::NAME,
        User::EMAIL,
        User::PHONE,
        User::GENDER,
        User::BIRTHDAY,
        User::PASSWORD,
        MigrationUtil::CREATED_BY,
        MigrationUtil::CREATED_AT,
        MigrationUtil::UPDATED_BY,
        MigrationUtil::UPDATED_AT,
        MigrationUtil::DELETED_BY,
        MigrationUtil::DELETED_AT,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        User::PASSWORD,
        User::REMEMBER_TOKEN,
        User::TWO_FACTOR_SECRET,
        USer::TWO_FACTOR_RECOVERY_CODES,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        User::EMAIL_VERIFIED_AT => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        User::PROFILE_PHOTO_URL,
    ];
}
