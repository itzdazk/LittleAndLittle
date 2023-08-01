<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'date_start',
        'date_end',
        'price',
        'img',
        'des',
        'long_des',
    ];
}
