<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phonebooks extends Model
{
    use HasFactory;

    protected $fillables = [
        'Name', 
        'Phone_number',
        'Address',
        'user_id'
    ];

}
