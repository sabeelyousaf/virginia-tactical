<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'company_name',
        'email',
        'phone_no',
        'address',
        'appartment',
        'province',
        'city',
        'status',
        'postal_code',
        'status',

    ];

}
