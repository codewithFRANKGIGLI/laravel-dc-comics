@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un Comic alla collezione!</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group m-2">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old('title') }}">
            </div>
            <div class="form-group m-2">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione" value="{{ old('description') }}">
            </div>
            <div class="form-group m-2">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine" value="{{ old('thumb') }}">
            </div>
            <div class="form-group m-2">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ old('price') }}">
            </div>
            <div class="form-group m-2">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ old('series') }}">
            </div>
            <div class="form-group m-2">
                <label for="type">Tipo</label>
                <select class="form-control" id="type" name="type">
                    <option @selected(old('type') === '') value="">Scegli un'opzione</option>
                    <option @selected(old('type') === 'comic book') value="lunga">Comic Book</option>
                    <option @selected(old('type') === 'graphic novel') value="corta">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success m-2">Aggiungi</button>
        </form>
    </div>
@endsection
