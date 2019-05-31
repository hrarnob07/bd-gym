<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    //
    protected $table='months';
    protected $primaryKey='months_id';
    protected $fillable=[
        'months_id',
        'months_name',

    ];
}
