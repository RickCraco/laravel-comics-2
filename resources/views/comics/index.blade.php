@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-dark">
        <div class="container">
            <span class="text-light bg-primary p-3 fs-3 text-uppercase">Current Series</span>
            <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success mt-4">{{ session()->get('message') }}</div>
            @endif
                @foreach ($comics as $comic)
                    <div class="col-2 py-5">
                        <div>
                            <img src="{{ $comic->thumb }}" alt="" class="object-fit-cover series-img">
                            <div>
                                <h6 class="title text-light text-uppercase">{{ $comic->title }}</h6>
                            </div>
                            <div><a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Read More</a></div>
                            <form action="{{route('comics.show', $comic)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cancel-button btn btn-danger" data-item-title="{{$comic->title}}">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pb-3">
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </div>
    {{-- <div class="bg-primary d-flex py-4">
        <div class="container d-flex justify-content-between align-items-center p-3">
            @foreach ($content as $el)
            <img src="{{$el->thumb}}" alt="" class="blue-bar-image">
            <span class="p-2 text-uppercase text-light">{{ $el->text }}</span>
            @endforeach
        </div>
    </div> --}}
</main>
@include('partials.modal_delete')
@endsection
