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
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" placeholder="Inserisci la descrizione..." name="description" id="description">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="src-img" class="form-label">SRC immagine</label>
                <input type="text" class="form-control" id="src-img" name="src-img" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" value="{{$comic->price}}" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>
            <div class="mb-3">
                <label for="artists">Creato da</label>
                <textarea class="form-control" placeholder="Inserisci i creatori..." id="artists" name="artists">{{implode(" ", $comic->artists)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="writer">Scritto da</label>
                <textarea class="form-control" placeholder="Inserisci gli scrittori..." id="writer" name="writers">{{implode(" ", $comic->writers)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>   
                        @endforeach
                    </ul>
                </div>
            @endif
        
        </form>
    </div>
</div>



@endsection