@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un Comic alla collezione!</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group m-2">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
            </div>
            <div class="form-group m-2">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descrizione">
            </div>
            <div class="form-group m-2">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Immagine">
            </div>
            <div class="form-group m-2">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
            </div>
            <div class="form-group m-2">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
            </div>
            <div class="form-group m-2">
                <label for="type">Tipo</label>
                <select class="form-control" id="type" name="type">
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success m-2">Aggiungi</button>
        </form>
    </div>
@endsection
