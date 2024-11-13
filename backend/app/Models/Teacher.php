<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'fn',
        'ln',
        'subjects',
        'gender',
        'isAdmin'
    ];

    protected $casts = [
        'subjects' => 'array',
        'isAdmin' => 'boolean'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
