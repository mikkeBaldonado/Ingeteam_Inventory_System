<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_log extends Model
{
    //
    protected $table = 'users_log';
    protected $fillable = [
        'name', 'email', 'action',
    ];
    public $timestamps = false;

}
