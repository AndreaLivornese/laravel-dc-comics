@extends('layouts/app')

@section("content")

<div id="form-wrapper">
    <div class="container_small py-5">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
        
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" placeholder="Inserisci la descrizione..." name="description" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="src-img" class="form-label">SRC immagine</label>
                <input type="text" class="form-control" id="src-img" name="src-img">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" value="€" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="artists">Creato da</label>
                <textarea class="form-control" placeholder="Inserisci i creatori..." id="artists" name="artists"></textarea>
            </div>
            <div class="mb-3">
                <label for="writer">Scritto da</label>
                <textarea class="form-control" placeholder="Inserisci gli scrittori..." id="writer" name="writers"></textarea>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
</div>



@endsection