<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_staff',
        'email_verified_at',
        'is_superuser',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function verified()
    {
        if (empty($this->email_verified_at)){
            return false;
        }else{
            return true;
        }

    }

    public function is_superuser()
    {
        if ($this->is_superuser==1){
            return true;
        }else{
            return false;
        }

    }


    public function is_staff()
    {
        if ($this->is_staff==1){
            return true;
        }else{
            return false;
        }

    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);

    }





}
