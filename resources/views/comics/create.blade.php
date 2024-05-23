@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un Comic alla collezione!</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
            </div>
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Immagine">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
            </div>
            <div class="form-group">
                <label for="sale_date">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Data di uscita">
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control" id="type" name="type">
                    <option value="comic book">Comic Book</option>
                    <option value="trade paperback">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
