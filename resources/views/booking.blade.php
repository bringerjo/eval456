@extends('layouts.default')
@section('content')

<main class="newReservation">
    <h2>Reservé votre chambre</h2>

<div class="listRoom">
    @foreach($bookings as $booking)
        {{ $booking->id }}
    @endforeach


    {{ Form::open() }}
    {{ csrf_field() }}

    <div class="form-group">
        {{ Form::label('arrival_date', 'date arrivée') }}
        {{ Form::date('arrival_date', null, ['class' => 'form-control']) }}
    </div>

    <div>
    	{{ Form::label('departure_date', 'date départ') }}
        {{ Form::date('departure_date', null, ['class' => 'form-control']) }}
    </div>    

    <div class="form-group">
    	{{ Form::label('customers', 'Client') }}
        <select id="customers" name="customers">
            @foreach($customers as $customer) 
                <option>{{$customer->id}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
    	{{ Form::label('bookingstatuses', 'Status') }}
        <select id="bookingstatuses" name="bookingstatuses">
            @foreach($bookingstatuses as $bookingstatuse)
                <option>{{$bookingstatuse->id}}</option>
            @endforeach
        </select>
    </div>        

    {{ Form::submit('Envoyer', ['class' => 'btn btn-info']) }}

    {{ Form::close() }} 

</div>
	
</main>

@stop