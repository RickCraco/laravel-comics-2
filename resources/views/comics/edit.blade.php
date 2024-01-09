@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')
<main class="bg-dark">
    <section class="container mb-4">
        <form action="{{route('comics.update',$comic)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" id="title" value="{{old('title', $comic->title)}}" name="title" placeholder="Inserisci il titolo" class="form-control">
            <input type="text" id="description" value="{{old('description', $comic->description)}}" name="description" placeholder="Inserisci la descrizione" class="form-control">
            <input type="text" id="price" value="{{old('price', $comic->price)}}" name="price" placeholder="Inserisci il prezzo" class="form-control">
            <input type="text" id="type" value="{{old('type', $comic->type)}}" name="type" placeholder="Inserisci il tipo" class="form-control">
            <input type="text" id="thumb" value="{{old('thumb', $comic->thumb)}}" name="thumb" placeholder="Inserisci l'immagine" class="form-control">
            <input type="text" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" name="sale_date" placeholder="Inserisci la data" class="form-control">
            <input type="text" id="series" value="{{old('series', $comic->series)}}" name="series" placeholder="Inserisci la serie" class="form-control">

            <button type="submit">Invia</button>
        </form>
    </section>
</main> 
@endsection
