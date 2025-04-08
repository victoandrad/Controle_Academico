<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function studentGroup(): BelongsTo
    {
        return $this->belongsTo(StudentGroup::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function frequencies(): HasMany
    {
        return $this->hasMany(Frequency::class, 'student_id', 'id');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'student_id', 'id');
    }
}
