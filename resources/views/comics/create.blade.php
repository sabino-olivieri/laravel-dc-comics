@extends('layouts.layout')

@section('content')
    <div class="row mt-5 pt-5">
        <div class="card p-5 text-center">
            <h3 class="mb-4">Inserisci i dati del nuovo comic</h3>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="titolo" name="title" required value="{{ old('title') }}">
                    <label for="title">Titolo</label>
                </div>
                @error('title')
                <div class="alert alert-danger">
                    {{ $errors->get('title')[0] }}
                </div>
                @enderror

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('series') is-invalid @enderror"" id="series" placeholder="serie" name="series" value="{{ old('series') }}">
                    <label for="series">Serie</label>
                </div>
                @error('series')
                <div class="alert alert-danger">
                    {{ $errors->get('series')[0] }}
                </div>
                @enderror

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('type') is-invalid @enderror"" id="type" placeholder="tipo" name="type" value="{{ old('type') }}">
                    <label for="type">Tipo</label>
                </div>
                @error('type')
                <div class="alert alert-danger">
                    {{ $errors->get('type')[0] }}
                </div>
                @enderror

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('image') is-invalid @enderror"" id="image" placeholder="link poster" name="image"
                        required value="{{ old('image') }}">
                    <label for="image">Link poster</label>
                </div>
                @error('image')
                <div class="alert alert-danger">
                    {{ $errors->get('image')[0] }}
                </div>
                @enderror

                <div class="form-floating mb-3">
                    <input type="number" class="form-control @error('price') is-invalid @enderror"" id="price" min="0.01" step="0.01"
                        placeholder="prezzo" name="price" required value="{{ old('price') }}">
                    <label for="price">Prezzo</label>
                </div>
                @error('price')
                <div class="alert alert-danger">
                    {{ $errors->get('price')[0] }}
                </div>
                @enderror

                <div class="form-floating mb-3">
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror"" id="sale_date" placeholder="data di pubblicazione"
                        name="sale_date" required value="{{ old('sale_date') }}">
                    <label for="sale_date">Data di pubblicazione</label>
                </div>
                @error('sale_date')
                <div class="alert alert-danger">
                    {{ $errors->get('sale_date')[0] }}
                </div>
                @enderror

                <div class="form-floating mb-3">
                    <textarea type="number" class="form-control @error('description') is-invalid @enderror"" id="description" placeholder="descrizione" name="description">{{ old('description') }}</textarea>
                    <label for="description">Descrizione</label>
                </div>
                @error('description')
                <div class="alert alert-danger">
                    {{ $errors->get('description')[0] }}
                </div>
                @enderror

                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </div>
@endsection
