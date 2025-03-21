<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    use HasFactory;

    protected $table = 'timeslots';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'day_of_week',
        'start_time',
        'end_time',
    ];
}
