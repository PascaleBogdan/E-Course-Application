<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = [
        'lessons'
    ];

    public function lessons()
    {
        return $this->hasMany(SectionLesson::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
