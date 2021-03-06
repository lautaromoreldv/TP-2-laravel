<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'excerpt',
        'name',
        'title_job',
        'image',
        'address',
        'tel',
        'email',
        'tec',
        'pro',
        'work',
        'edu',
        'fb',
        'tw',
        'gh',
        'db',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
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
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function skill(){
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education(){
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function about(){
        return $this->hasMany(About::class, 'id');
    }

    public function hago(){
        return $this->hasMany(Hago::class, 'user_id', 'id');
    }

    public function proskill(){
        return $this->hasMany(Proskill::class, 'user_id', 'id');
    }

    public function features(){
        return $this->hasMany(Features::class, 'user_id', 'id');
    }

    public function reviews(){
        return $this->hasMany(Reviews::class, 'user_id', 'id');
    }

    public function proyects(){
        return $this->hasMany(Proyects::class, 'user_id', 'id');
    }

    public function titulo(){
        return $this->hasMany(Titulo::class, 'user_id', 'id');
    }

    public function trabajo(){
        return $this->hasMany(Trabajo::class, 'user_id', 'id');
    }

    public function getGetImageAttribute($key)
    {
        if($this->image){
            return url("storage/$this->image");
        }
    }

}
