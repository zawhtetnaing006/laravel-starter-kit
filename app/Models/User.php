<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'degree',
        'job_title',
        'profile_photo_path',
        'device_name',
        'bio'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'age' => 'integer',
        'device_name' => 'string',
        'degree'    => 'string',
        'job_title' => 'string',
        'bio'   => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'profile_photo_path' => 'string'
    ];


    public function toArray()
    {
        $attributes = parent::toArray();

        $fillableAttributes = $this->getFillable();
        $missingAttributes = array_diff($fillableAttributes, array_keys($attributes));

        foreach ($missingAttributes as $attribute) {
            $attributes[$attribute] = null;
        }

        return $attributes;
    }

    protected function formatDateTime($dateTime)
    {
        return \Carbon\Carbon::parse($dateTime)->format('Y-m-d H:i:s');
    }

    public function Topics()
    {
        return $this->hasMany(Topic::class,'created_by','id');
    }
}
