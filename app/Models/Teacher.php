<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "teachers";
    protected $primaryKey = 'id';

    protected $fillable = [
        'personal_number',
        'name',
        'user_id',
    ];

    public function getFormattedPersonalNumberAttribute(): string
    {
        return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $this->personal_number);
    }
}
