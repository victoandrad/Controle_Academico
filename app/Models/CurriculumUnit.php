<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumUnit extends Model
{
    use HasFactory;

    protected $table = 'curriculum_units';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'name',
        'hours',
    ];
}
