<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeslot extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'timeslots';
    protected $primaryKey = 'id';

    protected $fillable = [
        'day_of_week',
        'start_time',
        'end_time',
    ];
}
