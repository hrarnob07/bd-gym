<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table='events';
    protected $primaryKey='events_id';
    protected $fillable=[
        'events_id',
        'fk_users_id',
        'events_start',
        'events_end',
        'name',
        'event_status',
        'fk_users_id',


    ];
}
