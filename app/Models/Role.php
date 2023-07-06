<?php

namespace App\Models;

use App\Models\User;
use App\Models\JobSeeker;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function company() {
        return $this->hasOne(Company::class, 'role_id');
    }

    public function jobSeeker() {
        return $this->hasOne(JobSeeker::class, 'role_id');
    }
}
