<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
