<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Course extends Model
{
    protected $table = 'users_courses';
    protected $guarded = [];  

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'users_courses', 'id', 'course_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_courses', 'id', 'user_id');
    }
}
