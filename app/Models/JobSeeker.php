<?php

namespace App\Models;

use App\Models\Bio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobSeeker extends Model
{
    use HasFactory;

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function bio() {
        return $this->hasOne(Bio::class, 'jobseeker_id');
    }
}
