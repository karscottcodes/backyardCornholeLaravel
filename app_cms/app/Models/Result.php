<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['Deleted At:'];

    protected $fillable = [
        "date",
        "note",
        "team1_id",
        "team1_score",
        "team2_id",
        "team2_score"
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

}
