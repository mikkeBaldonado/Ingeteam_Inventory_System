<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive_users extends Model
{
    //
    protected $table = 'archive_users';
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role', 'created_at', 'updated_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    const created_at = null;
    const updated_at = null;
}
