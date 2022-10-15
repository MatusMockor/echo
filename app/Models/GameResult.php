<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Post
 *
 * @property int         $id
 * @property int         $team_id
 * @property string      $our_name
 * @property int         $our_score
 * @property string      $enemy_name
 * @property int         $enemy_score
 * @property string      $mvp_player
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|GameResult whereBody($value)
 */
class GameResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'our_name',
        'our_score',
        'enemy_name',
        'enemy_score',
        'mvp_player',
    ];
}
