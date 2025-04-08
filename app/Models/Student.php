<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * @var \Illuminate\Support\HigherOrderCollectionProxy|mixed
     */
    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'registration_number',
        'name',
        'student_group_id',
        'user_id',
    ];

    public function studentGroup()
    {
        return $this->belongsTo(StudentGroup::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
