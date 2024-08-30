<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon query()
 * @property int $id
 * @property int $type_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Chapter> $chapters
 * @property-read int|null $chapters_count
 * @property-read \App\Models\Category $type
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereUpdatedAt($value)
 * @property int $category_id
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|Cartoon whereCategoryId($value)
 * @mixin \Eloquent
 */
class Cartoon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }
}
