<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    protected $table='attendances';
    protected $primaryKey='attendances_id';
    protected $fillable=[
        'attendances_id',
        'date',
        'fk_users_id',
        'fk_months_id',


    ];
}
