<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $table = 'cars';

    protected $fillable = [
        'price',
        'images',
        'transmission',
        'mileage',
        'description',
        'brand',
        'seats',
        'luggage',
        'year',
        'model',

    ];

    public function cars(){
        return $this->belongsTo(cars::class);
    }
}
