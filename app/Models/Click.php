<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    use HasFactory;

    protected $table = 'click';

    protected $fillable = [
        'ip',
        'referer',
        'user_agent',
    ];

    protected $casts = [
        'id' => 'integer',
        'ip' => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
