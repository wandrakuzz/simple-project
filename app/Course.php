<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function profile()
    {
      return $this->belongsTo(Profile::class);
    }
}
