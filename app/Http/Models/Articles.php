<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BlogPost
 *
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property string $slug
 * @property string $title
 * @property string|null $excerpt
 * @property string $content_raw
 * @property string $content_html
 * @property int $is_published
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereContentHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereContentRaw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Articles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Articles extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','is_published','slug','excerpt','published_at','content_raw'];
    const UNKNOWN_USER = 1;

}
