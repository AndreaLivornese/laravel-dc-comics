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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $comic->title}}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

                
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci la descrizione..." name="description" id="description" required>{{old('description') ?? $comic->description}}</textarea>
                
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
           
            </div>
            <div class="mb-3">
                <label for="src-img" class="form-label">SRC immagine</label>
                <input type="text" class="form-control @error('src-img') is-invalid @enderror" id="src-img" name="src-img" value="{{old('src-img') ?? $comic->thumb}}" required>

                @error('src-img')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{old('price') ?? $comic->price}}" name="price" required>

                @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series') ?? $comic->series}}" required>

                @error('series')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type') ?? $comic->type}}" required>

                @error('type')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="artists">Creato da</label>
                <textarea class="form-control @error('artists') is-invalid @enderror" placeholder="Inserisci i creatori..." id="artists" name="artists" required>{{old('artists') ?? implode(" ", $comic->artists)}}</textarea>
           
                @error('artists')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="writer">Scritto da</label>
                <textarea class="form-control @error('writer') is-invalid @enderror" placeholder="Inserisci gli scrittori..." id="writer" name="writers" required>{{old('writers') ?? implode(" ", $comic->writers)}}</textarea>
           
                @error('writers')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}" required>

                @error('sale_date')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
</div>



@endsection