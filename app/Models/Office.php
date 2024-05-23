<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    use HasBlocks, HasFactory, HasMedias, HasRevisions, HasSlug;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
