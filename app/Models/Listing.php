<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'email', 'location', 'website', 'description', 'tags'];
    public function scopeFilter ($query, array $filters) {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            -> orwhere('description', 'like', '%' . request('search') . '%')
            -> orwhere('tags', 'like', '%' . request('search') . '%')
            -> orwhere('location', 'like', '%' . request('search') . '%')
            -> orwhere('company', 'like', '%' . request('search') . '%');
        } 
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
