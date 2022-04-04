@extends('layouts.base')

@section('pageTitle', 'Fumetti')

@section('content')
    
<div class="container">

    <h1>Fumetti</h1>

    <a class="btn btn-warning" href="{{ route('comics.create') }}" role="button">Crea nuovo fumetto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                    
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->price}}</td>

                    <td class="d-flex">
                        <a class="btn btn-primary" href="{{ route('comics.show', $comic->id ) }}" role="button">Vedi</a>
                        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id ) }}" role="button">Modifica</a>

                        <form method="POST" action="{{route('comics.destroy', ['comic' => $comic->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
               
            @endforeach
        </tbody>
      </table>

</div>
@endsection