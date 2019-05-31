<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table='messages';
    protected $primaryKey='messages_id';
    protected $fillable=[
        'status',
        'messages_id',
        'messages_body'
        ];
}
