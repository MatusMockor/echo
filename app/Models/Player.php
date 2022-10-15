<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Player
 *
 * @property int         $id
 * @property int         $team_id
 * @property string      $name
 * @property string      $slug
 * @property int         $age
 * @property string      $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Player newModelQuery()
 * @method static Builder|Player newQuery()
 * @method static Builder|Player query()
 * @method static Builder|Player whereAge($value)
 * @method static Builder|Player whereCreatedAt($value)
 * @method static Builder|Player whereDescription($value)
 * @method static Builder|Player whereId($value)
 * @method static Builder|Player whereName($value)
 * @method static Builder|Player whereSlug($value)
 * @method static Builder|Player whereTeamId($value)
 * @method static Builder|Player whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'name',
        'slug',
        'age',
        'description',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
