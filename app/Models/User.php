<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\True_;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function  roles(){
        return $this->belongsToMany(Role::class,'role_user', 'user_id','role_id');
    }
    public function CheckPermisson($permissonsCheck)
    {
        $roles = auth()->user()->roles;
        foreach ($roles as $role) {
            $permisson = $role->permissions;
            if ($permisson->contains('code_key', $permissonsCheck)) {
                return true;
            }
        }
        return false;
    }
    public function  postUser(){
        return $this->hasMany(Post::class);
    }
}
