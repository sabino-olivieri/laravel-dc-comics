@extends('layouts.layout')

@section('content')
<div class="row  mt-5 pt-3">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 text-center py-3">
                <img src="{{ $comic['image'] }}" class="img-fluid rounded-2" alt="poster {{ $comic['title'] }}">
                <p>Prezzo: € {{ $comic['price'] }}</p>

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text"><small class="text-body-secondary">Serie: {{ $comic['series'] }} - Tipo: {{$comic['type']}}</small></p>
                    <p class="card-text"><small class="text-body-secondary">Pubblicato il: {{ $comic['sale_date'] }}</small></p>
                    <p class="card-text">{{ $comic['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
