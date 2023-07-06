<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Listing;
use App\Models\Company;
use App\Models\JobSeeker;
use App\Models\UserLocation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'email',
        'birthdate',
        'phone_number',
        'profile_picture',
        'password',
        'role_type',
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

    public function listings() {
        return $this->hasMany(Listing::class, 'user_id');
    }
    // Relation to UserLocation
    public function UserLocation() {
        return $this->hasOne(UserLocation::class, 'user_id');
    }
    // Relation to Roles
    public function role() {
        return $this->hasOne(Role::class, 'user_id');
    }
    // relation to company 
    public function company() {
        return $this->hasOneThrough(Company::class, Rule::class, 'user_id', 'role_id');
    }
    // relation to jobseeker 
    public function jobseeker() {
        return $this->hasOneThrough(JobSeeker::class, Rule::class, 'user_id', 'role_id');
    }
    // cara 2
    // public function role() {
    //     return $this->belongsTo(Role::class, 'user_id');
    // }

}
