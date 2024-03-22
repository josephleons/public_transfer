<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        'username',
        'password',
        // 'users_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // check admin roles
    public function is_admin(){
        return $this->roles()->where('role_type','admin')->exists();
    }
//    check client roles
    public function is_Employee(){
        return $this->roles()->where('role_type','Employee')->exists();
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    // User Model has many emlyoyee
    public function employee(){
        return $this->hasOne(Employee::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    
    public function roles(){
        return $this->hasMany(Role::class,'userID');
    }



    
}
