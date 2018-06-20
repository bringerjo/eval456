<?php

namespace App;

use App\bed_types;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public static function room()
	{
		return Room::all();
	}
}
