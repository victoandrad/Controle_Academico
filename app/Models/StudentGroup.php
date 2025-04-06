<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'student_groups';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'student_group_id', 'id');
    }

    public function size(): int
    {
        return $this->students()->count();
    }
}
