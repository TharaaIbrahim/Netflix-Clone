<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gener extends Model
{
    use HasFactory;
    protected $fillable = [
        'gener_name',
        'gener_description'
    ];

    public function movie(){
        return $this->hasMany(Movie::class);
    }
}
