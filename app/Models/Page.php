<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasBlocks, HasFactory, HasMedias, HasRevisions, HasSlug, HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'description',
        'notes',
        'office_id',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'notes',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
}
