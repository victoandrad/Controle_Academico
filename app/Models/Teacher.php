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
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
