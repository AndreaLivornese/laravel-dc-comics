@extends('layouts/app')

@section("content")

<div id="form-wrapper">
    <div class="container_small py-5">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
        
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci la descrizione..." name="description" id="description" required>{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="src-img" class="form-label">SRC immagine</label>
                <input type="text" class="form-control @error('src-img') is-invalid @enderror" id="src-img" name="src-img" required value="{{old('src-img')}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{old('price')}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" required value="{{old('series')}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" required value="{{old('type')}}">
            </div>
            <div class="mb-3">
                <label for="artists">Creato da</label>
                <textarea class="form-control @error('artists') is-invalid @enderror" placeholder="Inserisci i creatori..." id="artists" name="artists" required>{{old('artists')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="writer">Scritto da</label>
                <textarea class="form-control @error('writers') is-invalid @enderror" placeholder="Inserisci gli scrittori..." id="writer" name="writers" required>{{old('writers')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" required value="{{old('sale_date')}}">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
</div>



@endsection