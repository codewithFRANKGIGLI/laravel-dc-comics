@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Comics Collection</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 py-2">
                    <div class="card" style="width: 18rem; height: 40rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success m-2">View</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success m-2">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
