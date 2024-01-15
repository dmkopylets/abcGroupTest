<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    use HasFactory;

    protected $table = 'actions'; // вказуємо таблицю

    protected $fillable = [
        'event_date',
        'click_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'event_date' => 'datetime:Y-m-d H:i:s', // або інший формат за необхідності
        'click_id' => 'integer',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    // public function click()
    // {
    //     return $this->belongsTo(Click::class, 'click_id');
    // }
}
