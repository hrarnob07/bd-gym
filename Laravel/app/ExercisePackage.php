<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisePackage extends Model
{
    //
    protected $table='exercise_packages';
    protected $primaryKey='ep_id';
    protected $fillable=[
        'ep_id',
        'ep_name'
    ];
}
