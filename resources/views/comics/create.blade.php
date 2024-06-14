@extends('layouts.layout')

@section('content')
    <div class="row mt-5 pt-3">
        <div class="card p-5 text-center">
            <h3 class="mb-4">Inserisci i dati del nuovo comic</h3>

            <form action="" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" placeholder="titolo" name="title" required>
                    <label for="title">Titolo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="series" placeholder="serie" name="series">
                    <label for="series">Serie</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="image" placeholder="link poster" name="image" required>
                    <label for="image">Link poster</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="price" placeholder="prezzo" name="price" required>
                    <label for="price">Prezzo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="sale_date" placeholder="prezzo" name="sale_date" required>
                    <label for="sale_date">Data di pubblicazione</label>
                </div>
                
                <div class="form-floating mb-3">
                    <textarea type="number" class="form-control" id="description" placeholder="prezzo" name="description"></textarea>
                    <label for="description">Descrizione</label>
                </div>

                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </div>
@endsection