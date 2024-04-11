<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['Deleted At:'];

    protected $fillable = [
        "first_name",
        "last_name",
        "join_date"
    ];

    public function teams():BelongsToMany
    {
        return $this -> belongsToMany(Team::class);
    }
}