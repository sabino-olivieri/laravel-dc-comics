@extends('layouts.layout')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row g-2">
            <div class="col-12 col-md-6 position-relative">
                <a href="{{ route('comics.index') }}">
                    <div class="comic-list">

                    </div>
                    <h2  class="text-center">Lista comics</h2>
                </a>

            </div>

            <div class="col-12 col-md-6 position-relative">
                <a href="{{ route('comics.create') }}">
                    <div class="new-comic">

                    </div>
                    <h2 class="text-center">Aggiungi nuovo comic</h2>
                </a>

            </div>
        </div>
    </div>
@endsection
