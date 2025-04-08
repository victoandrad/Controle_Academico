<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lessons';
    protected $primaryKey = 'id';

    protected $fillable = [
        'room_id',
        'timeslot_id',
        'teacher_id',
        'student_group_id',
        'curriculum_unit_id',
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function timeslot() {
        return $this->belongsTo(Timeslot::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function studentGroup() {
        return $this->belongsTo(StudentGroup::class);
    }

    public function curriculumUnit() {
        return $this->belongsTo(CurriculumUnit::class);
    }
}
