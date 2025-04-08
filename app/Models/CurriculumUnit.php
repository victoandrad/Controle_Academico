<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurriculumUnit extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'curriculum_units';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'name',
        'hours',
    ];

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'curriculum_unit_id', 'id');
    }

    public function frequencies(): HasMany
    {
        return $this->hasMany(Frequency::class, 'curriculum_unit_id', 'id');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'curriculum_unit_id', 'id');
    }
}
