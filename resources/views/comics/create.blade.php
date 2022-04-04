@extends('layouts.base')

@section('pageTitle', 'Crea nuovo fumetto')

@section('content')

    <div class="container">

        <h1>Nuovo fumetto</h1>

        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label" >Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('description')}}" required>
            </div>

            <div class="mb-3">
                <div class="mb-3">
                    <label for="sale_date">Data di vendita</label>
    
                    <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label" >Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}" required>
            </div>


            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" required>
                    {{old('description')}}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Invia</button>

        </form>

    </div>




@endsection