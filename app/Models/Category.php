<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class);
    }

    public function createdAt(): String
    {
        return $this->created_at->format('d/m/Y');
    }
}
