<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    protected $table='exercises';
    protected $primaryKey='exercises_id';
    protected $fillable=[
        'exercises_id',
        'fk_ep_id',
        'exercises_name',
        'link',
        'remarks',


    ];
}
