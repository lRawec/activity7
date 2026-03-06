<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function kit()
    {
        return $this->belongsTo(RoboticsKit::class, 'robotics_kit_id');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_course', 'course_key', 'group_id');
    }
}
