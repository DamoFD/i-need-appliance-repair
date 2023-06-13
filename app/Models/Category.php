<?php

namespace App\Models;

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
}
