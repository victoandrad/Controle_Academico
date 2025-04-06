<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tasks';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'completed',
        'value',
        'student_id',
        'curriculum_unit_id',
    ];
}
