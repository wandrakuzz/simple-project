<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    protected $fillable = [
      'name',
    ];


    public function user()
    {
      return $this->hasMany(User::class);
    }
}
