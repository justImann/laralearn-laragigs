<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    // Relationship to Company
    public function company () {
        $this->belongsTo(Company::class, 'company_id');
    }
}
