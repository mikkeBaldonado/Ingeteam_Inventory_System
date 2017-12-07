<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borrowed extends Model
{
    //
    protected $table = 'borrowed';
    protected $fillable = [
        'name', 'email', 'equipments_id','parts', 'condition',
    ];
    public $timestamps = false;

}
