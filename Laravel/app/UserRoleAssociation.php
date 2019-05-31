<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoleAssociation extends Model
{
    //
    protected $table='user_role_associations';
    protected $primaryKey='ura_id';
    protected $fillable=[
        'ura_id',
        'fk_urers_id',
        'fk_user_roles_id',
        'fk_urers_id',
        'fk_user_roles_id',

    ];
}
