@extends('layouts.app')

@section('title', 'Comic Create')

@section('content')
<main class="bg-dark">
    <section class="container mb-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <input type="text" id="title" value="{{old('title')}}" name="title" placeholder="Inserisci il titolo" class="form-control @error('title') is-invalid @enderror">
            <input type="text" id="description" name="description" placeholder="Inserisci la descrizione" class="form-control">
            <input type="text" id="price" name="price" placeholder="Inserisci il prezzo" class="form-control">
            <input type="text" id="type" name="type" placeholder="Inserisci il tipo" class="form-control">
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci l'immagine" class="form-control">
            <input type="text" id="sale_date" name="sale_date" placeholder="Inserisci la data" class="form-control">
            <input type="text" id="series" name="series" placeholder="Inserisci la serie" class="form-control">

            <button type="submit">Invia</button>
        </form>
    </section>
</main> 
@endsection
