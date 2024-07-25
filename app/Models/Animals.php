<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animals extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'common_name',
        'scientific_name',
        'class',
        'habitat',
        'geographical_distribution',
        'high_max',
        'weigh_max',
        'image_url',
        'note',
    ];
}
