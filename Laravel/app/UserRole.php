<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    protected $table='user_roles';
    protected $primaryKey='user_roles_id';
    protected $fillable=[
        'user_roles_id',
        'name',

    ];
}
