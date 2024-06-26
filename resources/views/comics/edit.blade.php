@extends('layouts.app')
@section('content')

    {{-- simile al form di create.blade.php ma con le dovute modifiche per modificare --}}
    <div class="container">
        <h1>Modifica il comic: {{ $comic->title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group m-2">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="form-group m-2">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
            </div>
            <div class="form-group m-2">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="form-group m-2">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="form-group m-2">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="form-group m-2">
                <label for="type">Tipo</label>
                <select class="form-control" id="type" name="type">
                    <option value="" @selected(old('type', $comic->type) === '')>Scegli un'opzione</option>
                    <option @selected(old('type', $comic->type)==='comic book') value="comic book">Comic Book</option>
                    <option @selected(old('type', $comic->type)==='graphic novel') value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success m-2">Conferma Modifiche</button>
        </form>
    </div>

@endsection
