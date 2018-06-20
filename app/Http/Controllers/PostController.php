<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking_statuse;
use App\Booking;
use App\Room;
use App\Customer;

class PostController extends Controller
{
    public function create()
    {
        return view('/booking');
    }
    public function save_data($id)
    {
        $booking = new booking;
    
        $booking->arrival_date = request('arrival_date');
        $booking->departure_date = request('departure_date');
        $booking->customer_id = request('customers');
        $booking->booking_status_id = request('bookingstatuses');
        $booking->room_id = 1;
        //remplacer par $booking->room_id = $id;


        
        $booking->save();
    
        return redirect('/booking');
    }
}
