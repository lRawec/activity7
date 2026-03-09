<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_key';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['course_key', 'title', 'cover_image', 'content', 'robotics_kit_id'];
}