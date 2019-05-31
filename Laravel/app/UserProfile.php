<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $table='user_profiles';
    protected $primaryKey='user_profiles_id';
    protected $fillable=[
        'height',
        'user_profiles_id',
        'weight',
        'boold_group',
        'exercise_start',
        'exercise_end',
        'status',
        'fk_ep_id',
    ];
}
