@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>COMICS COLLECTION</h1>
        <div class="row justify-content-center">
            <a href="{{ route('comics.create') }}" class="btn btn-success btn-lg">AGGIUNGI UN COMIC ALLA COLLEZIONE</a>
        </div>
    </div>
@endsection
