<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'user_id',
    // ];
    
    protected $casts = [
        'vehicle_features' => Json::class,
        'vehicle_financial' => Json::class,
    ];

    protected $guarded = ['id'];

    static $rules = [
        'zipCode' => 'required',
        'city' => 'required',
        'uf' => 'required',
        'vehicle_type' => 'required',
        'vehicle_brand' => 'required',
        'vehicle_model' => 'required',
        'vehicle_version' => 'required',
        'vehicle_regdate' => 'required',
        'vehicle_fuel' => 'required',
        'vehicle_price' => 'required',
        'vehicle_photos' => 'exists:vehicle_photos,vehicle_id',
    ];

    public function vehicle_photos() {
        return $this->hasMany('App\Models\Vehicle_photos', 'vehicle_id', 'id')
            ->orderBy('order', 'ASC');
    }

}
