<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gener;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'movie_name',
        'movie_description',
        'movie_gener',
        'gener_id'
    ];

    public function gener(){
        return $this->hasMany(Gener::class);
    }

}
