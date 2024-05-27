@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Comics Collection</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 py-2">
                    <div class="card" style="width: 21rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success m-2">View</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success m-2">Edit</a>
                            <form class="m-2" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger js-delete-btn" data-comic-title='{{$comic->title}}'>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmDeleteModalLabel">Conferma</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Sei sicuro di voler eliminare questo elemento?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary">Si</button>
                </div>
            </div>
        </div>
    </div>
@endsection
