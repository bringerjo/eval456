@extends('layouts.default')
@section('content')

<div class="listRoom">
        <div>
            @foreach($lists as $list)
            <div>Nom: {{ $list->name }}</div>
            <div>Prix: {{ $list->price}}€</div>
            <div>Suite: @if( $list->is_suite == 0) 
                              Non
                        @else
                            oui
                        @endif
            </div>
            <div>Vue:{{ $list->view}}</div>
            <div>Type de lit: {{ $list->bed_type}}</div>
            <div>Etage: {{ $list->floor}}</div>
            <div>Surface: {{ $list->area}} m2</div>
            <div>Salle de bain: {{ $list->bathroom_type}}</div>
            <div>Access handicap: 
                @if( $list->reduced_mobility_access == 0) 
                    Non
                @else
                    Oui
                @endif
            </div>
            <a href="{{ url('/booking')}}/{{$list->name}}" type="button">Réservation</a>
            @endforeach
        </div>
    </div>
@stop