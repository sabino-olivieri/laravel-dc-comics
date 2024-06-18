@extends('layouts.layout')
@section('content')
<div  class=" mt-5 pt-5"> 
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
                    <th scope="row">{{ $comic['title'] }}</th>
                    <td>{{ $comic['series'] }}</td>
                    <td>{{ $comic['sale_date'] }}</td>
                    <td class="d-flex gap-1">
                        
    
                        <form action="{{ route('comics.restore', ['comic' => $comic['id']]) }}" method="post" class="restore">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success"><i class="fa-solid fa-trash-can-arrow-up"></i> Recupera</button>
                        </form>
    
                        <form action="{{ route('comics.delete', ['comic' => $comic['id']]) }}" method="post" class="restore">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-solid fa-bomb"></i> Distruggi</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
</div>
@endsection