<?php

namespace App\Models;

use App\Models\JobSeeker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bio extends Model
{
    use HasFactory;

    public function jobseeker() {
        return $this->belongsTo(JobSeeker::class, 'jobseeker_id');
    }
}
