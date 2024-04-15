@extends('layouts/app')

@section("content")

{{-- @dd($comic) --}}

<div id="form-wrapper">
    <div class="container_small py-5">
        <form action="{{route('comics.update',$comic->id)}}" method="POST">
            @csrf
            @method("PUT")
        
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title') ?? $comic->title}}" required>
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" placeholder="Inserisci la descrizione..." name="description" id="description" required>{{old('description') ?? $comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="src-img" class="form-label">SRC immagine</label>
                <input type="text" class="form-control" id="src-img" name="src-img" value="{{old('src-img') ?? $comic->thumb}}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" value="{{old('price') ?? $comic->price}}" name="price" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series') ?? $comic->series}}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type') ?? $comic->type}}" required>
            </div>
            <div class="mb-3">
                <label for="artists">Creato da</label>
                <textarea class="form-control" placeholder="Inserisci i creatori..." id="artists" name="artists" required>{{old('artists') ?? implode(" ", $comic->artists)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="writer">Scritto da</label>
                <textarea class="form-control" placeholder="Inserisci gli scrittori..." id="writer" name="writers" required>{{old('writers') ?? implode(" ", $comic->writers)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
</div>



@endsection