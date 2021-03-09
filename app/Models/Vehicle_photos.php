<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_photos extends Model
{
    use HasFactory;

    protected $guard = ['id'];

    protected $fillable = ['id', 'vehicle_id', 'user_id', 'img', 'order'];
}
