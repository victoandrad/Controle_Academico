<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = "teachers";
    protected $primaryKey = 'id';

    protected $fillable = [
        'personal_number',
        'name',
        'user_id',
    ];
}
