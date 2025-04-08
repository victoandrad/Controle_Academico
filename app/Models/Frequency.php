<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frequency extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'frequencies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'attended',
        'excused',
        'student_id',
        'lesson_id',
        'date',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function curriculumUnit(): BelongsTo
    {
        return $this->belongsTo(CurriculumUnit::class);
    }
}
