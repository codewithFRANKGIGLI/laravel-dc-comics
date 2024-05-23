@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>{{ $comic->title }}</h1>
        <div class="row justify-content-center">
            <div class="col-12">
                <img src="{{ $comic->thumb }}" alt="immagine {{ $comic->title }}">
                <div>
                    <h3>Prezzo: {{ $comic->price }}</h3>
                    <h3>Descrizione: {{ $comic->description }}</h3>
                    <h3>Series: {{ $comic->series }}</h3>
                </div>
            </div>
        </div>
        <a href="{{ route('comics.index', $comic->id) }}" class="btn btn-primary">Return to collection</a>
    </div>
@endsection
