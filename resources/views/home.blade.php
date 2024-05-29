@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>COMICS COLLECTION</h1>
        {{-- <div class="row justify-content-center"> --}}
        {{-- <a href="{{ route('comics.create') }}" class="btn btn-success btn-lg">AGGIUNGI UN COMIC ALLA COLLEZIONE</a> --}}

        <div class="container text-center">
            <h5>Comics List</h5>
            <div class="row gap-3 justify-content-center">
                @foreach ($comics as $comic)
                    {{-- <div class="col-4 py-2"> --}}
                        <div class="card" style="width: 10rem;">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <p class="card-title">{{ $comic->title }}</p>
                            </div>
                        </div>
                    {{-- </div> --}}
                @endforeach
            </div>
        </div>

        {{-- </div> --}}
    </div>
@endsection
