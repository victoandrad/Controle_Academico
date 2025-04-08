<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rooms';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'size',
    ];

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'room_id', 'id');
    }
}
