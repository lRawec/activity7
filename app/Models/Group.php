<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'group_course', 'group_id', 'course_key');
    }
}
