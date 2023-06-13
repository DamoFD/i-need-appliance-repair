<?php

namespace App\Models;

use App\Traits\HasTags;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thread extends Model
{
    use HasFactory;
    use HasTags;
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
