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
                    <td class="d-flex gap-1">
                        <a class="btn btn-success" href="{{route('comics.show', ['comic' => $comic['id']])}}"><i class="fa-solid fa-info"></i></a>
                        <a class="btn btn-primary" href="{{route('comics.edit', ['comic' => $comic['id']])}}"><i class="fa-solid fa-pen-to-square"></i></a>

                        <form action="{{route('comics.destroy', ['comic' => $comic['id']])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
