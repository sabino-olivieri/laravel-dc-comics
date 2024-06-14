@extends('layouts.layout')

@section('content')
    <h2 class="mt-5 pt-3">Lista dc comics</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data pubblicazione</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comicList as $comic)
                <tr>
                    <th scope="row">{{$comic['title']}}</th>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td><a class="btn btn-success" href="{{route('comics.show', ['comic' => $comic['id']])}}">Dettagli</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
