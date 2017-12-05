<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{

    protected $fillable = [
        'sap', 'parts', 'units', 'hs_code', 'condition',
    ];
}
