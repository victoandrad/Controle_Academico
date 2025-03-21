<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $primaryKey = 'id';

    protected $fillable = [
        'room_id',
        'timeslot_id',
        'teacher_id',
        'student_group_id',
        'curriculum_unit_id'
    ];
}
