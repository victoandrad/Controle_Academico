<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frequency extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'frequencies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'attended',
        'student_id',
        'curriculum_unit_id',
        'date',
    ];
}
