@extends('layouts.default')
@section('content')
<main class="list">
<h2>Nos chambres</h2>
@foreach($lists as $list)
<div class="listRoom">
    <p>Nom : {{$list->name}}</p>
    <p>Catégorie de la chambre : 
        @if (($list->is_suite) === 1)
            Cette chambre est une suite.
        @else
            Cette chambre n'est pas une suite.
        @endif
    </p>
    <p>Tarif : {{$list->price}} €</p>
    <p>Accés personne à mobilité réduite : 
        @if (($list->reduced_mobility_access) === 1)
            Oui
        @else
            Non
        @endif
    </p>
    <p>Lit : {{$list->bed_type}}</p>
    <a href="{{ url('/room')}}/{{$list->name}}" type="button">Voir plus...</a>
</div>
@endforeach

</main>
@stop