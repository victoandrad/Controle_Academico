<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    use HasFactory;

    protected $table = 'frequencies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'attended',
        'student_id',
        'curriculum_unit_id',
    ];
}
