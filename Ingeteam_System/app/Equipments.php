<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    //
    protected $table = 'equipments';
    protected $fillable = [
        'sap', 'parts', 'units', 'hs_code', 'condition',
    ];
}
