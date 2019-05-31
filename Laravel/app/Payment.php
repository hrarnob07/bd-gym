<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table='payments';
    protected $primaryKey='payments_id';
    protected $fillable=[
        'payments_id',
        'fk_users_id',
        'fk_months_id',
        'amount',
        'payment_date',
        'fk_users_id',
        'fk_months_id',

    ];
}
