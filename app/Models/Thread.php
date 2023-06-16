<?php

namespace App\Models;

use App\Traits\HasTags;
use App\Models\Category;
use App\Traits\HasAuthor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thread extends Model
{
    use HasFactory;
    use HasTags;
    use HasAuthor;

    protected $fillable = [
        'subject',
        'body',
        'category_id',
        'author_id',
    ];

    protected $with = [
        'authorRelation',
        'categories',
        'tagsRelation',
    ];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function delete()
    {
        $this->removeTags();
        parent::delete();
    }
}
