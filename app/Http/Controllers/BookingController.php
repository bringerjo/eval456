<?php

namespace App\Http\Controllers;

use DB;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
	public function statut($name)
    {
		$bookings = DB::table('rooms')
		->where('name', $name)->get();
		$customers = DB::table('customers')
		->get();
		$bookingstatuses = DB::table('booking_statuses')
		->get();

        return view ('/booking', compact('bookingstatuses', 'customers', 'bookings'));
    }
	public function show($name) 
	{ 
        $bookings = DB::table('rooms')
        ->where('name', $name)->get(); 

    	return view('/booking', compact('bookings')); 
	}
}
