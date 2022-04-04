@extends('layouts.base')

@section('pageTitle')
    {{$comic->title}}
@endsection


@section('content')

    <div class="container">
        <h1>{{$comic->title}}</h1>
        <div><strong>Tipo:</strong> {{$comic->type}}</div>
        <div><strong>Serie:</strong> {{$comic->series}}</div>
        <div><strong>Prezzo:</strong> {{$comic->price}}</div>
        <div><strong>Descrizione:</strong> {!! $comic->description !!}</div>

        <a class="btn btn-primary mt-5" href="{{route('comics.index')}}" role="button">Torna alla lista</a>

    </div>



@endsection