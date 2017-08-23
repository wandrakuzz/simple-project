<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'club_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function suggest()
    {
      return $this->hasMany(Suggest::class);
    }

    public function club()
    {
      return $this->belongsTo(Club::class);
    }

    public function profile()
    {
      return $this->belongsTo(Profile::class);
    }




}
