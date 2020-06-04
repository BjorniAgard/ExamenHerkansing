<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class User_Course extends Model
{
    use Sortable;
    protected $table = 'users_courses';
    protected $guarded = []; 
    public $sortable = ['id', 'user_id', 'course_id', 'start_date', 'end_date'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'users_courses', 'id', 'course_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_courses', 'id', 'user_id');
    }
}
