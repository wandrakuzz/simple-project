<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
      'user_id',
      'course_id',
      'fullname',
      'matric_no',
      'gender',
      'year',
      'no_tel',
    ];

    public function user()
    {
      return $this->hasMany(User::class);
    }

    public function course()
    {
      return $this->hasMany(Course::class);
    }
}
