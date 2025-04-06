<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    use HasFactory;

    protected $table = 'student_groups';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function students() {
        return $this->hasMany(Student::class, 'student_group_id', 'id');
    }

    public function size(): int
    {
        return $this->students()->count();
    }
}
