<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Pktharindu\NovaPermissions\Role;
use Pktharindu\NovaPermissions\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'password' => 'hashed',
        'birthday_date' => 'date'
    ];

    public function projects(){
        return $this->hasMany(Project::class);
    }

    // admin
    public function isAdmin(){
        return $this->hasRole('admin');
    }

    public function hasRole($role){
        return $this->roles()->where('slug', $role)->exists();
    }

    public function assignRole($role){
        $role = Role::where('slug', $role)->first();
        return $this->roles()->attach($role);
    }

    public function removeRole($role){
        $role = Role::where('slug', $role)->first();
        return $this->roles()->detach($role);
    }
}
