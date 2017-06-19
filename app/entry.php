<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entry extends Model
{

	// protected $fillable = ['geolocation', 'type', 'isAvailable', 'description', 'name', 'costToRent', 'costToOwn', 'numberOfRooms', 'numberOfBathrooms', 'sqft'];

	protected $guard = [];

    function owner(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    function path() {
    	return '/entries/'.$this->id;
    }
}
