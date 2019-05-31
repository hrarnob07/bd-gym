<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $table='notifications';
    protected $primaryKey='notifications_id';
    protected $fillable=[
        'notifications_id',
        'fk_users_id',
        'status',
        'notification_body'
    ];
}
