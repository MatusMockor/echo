<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'ourName',
        'ourScore',
        'enemyName',
        'enemyScore',
        'MVPPlayer',
    ];
}
