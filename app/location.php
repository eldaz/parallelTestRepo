<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = ['geolocation', 'type', 'isAvailable', 'description', 'name', 'costToRent', 'costToOwn', 'numberOfRooms', 'numberOfBathrooms', 'sqft'];
}
