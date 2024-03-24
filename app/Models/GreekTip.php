<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GreekTip extends Model
{
    use HasFactory;
    protected $table = "greek_tips";

    protected $fillable = [
        'origin_of_proverb',
        'proverb',
        'description_proverb',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
