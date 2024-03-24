<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChineseTip extends Model
{
    use HasFactory;
    protected $table = "chinese_tips";
    
    protected $fillable = [
        'origin_of_proverb',
        'proverb',
        'description_proverb',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $guarded = [];
}
