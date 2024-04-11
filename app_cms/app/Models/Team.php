<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['Deleted At:'];

    protected $fillable = [
        "team_name",
        "img_src"
    ];

    public function players():BelongsToMany
    {
        return $this -> belongsToMany(Player::class);
    }

    public function results():BelongsToMany
    {
        return $this -> belongsToMany(Result::class);
    }
}
