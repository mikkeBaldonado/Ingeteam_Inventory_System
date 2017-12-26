<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive_equipments extends Model
{
    //
    protected $table = 'archive_equipments';
    protected $fillable = [
        'sap', 'parts', 'units', 'hs_code', 'condition',
    ];

    public $timestamps = false;
}
