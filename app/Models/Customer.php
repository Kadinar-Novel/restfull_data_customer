<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

	protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'is_married',
        'address'
    ];
}