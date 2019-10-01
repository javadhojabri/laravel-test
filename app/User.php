<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'full_name', 'email', 'password', 'role'
    ];
    protected $guarded = ['user_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    const ADMIN = 1;
    const USER = 2;

    public function details_role_user()
    {
        switch ($this->attributes['role']) {
            case self::ADMIN:
                return "یوزر مدیر";
                break;
            case self::USER:
                return "یوزر عادی";
                break;
        }
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);

    }
}
