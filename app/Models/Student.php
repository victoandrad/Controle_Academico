<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'registration_number',
        'name',
        'student_group_id',
        'user_id',
    ];

    public function getFormattedRegistrationNumberAttribute(): string
    {
        return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $this->registration_number);
    }

    public function studentGroup()
    {
        return $this->belongsTo(StudentGroup::class);
    }
}
