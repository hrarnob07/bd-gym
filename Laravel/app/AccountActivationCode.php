<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountActivationCode extends Model
{
    //
    protected $primaryKey="id";
    protected $fillable = ['code'];
}
