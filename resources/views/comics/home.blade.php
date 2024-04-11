@extends('layouts/app')

@section("content")

<main>

    <div id="grid">
        <div class="my_container">
    
            <div class="banner">
              CURRENT SERIES
            </div>
          
            <div class="my_row">
              
                @foreach ($comics as $comicsItem)
                <a href="{{route('comics.show', $comicsItem->id)}}">
                    <div class="my_card">
                        <div class="my_card-img">
                            <img src="{{$comicsItem['thumb']}}" alt="immagine del fumetto">
                        </div>
                        <div class="comics-title">
                            {{ $comicsItem["title"] }}
                        </div>
                    </div>
                </a>    
                @endforeach
      
            </div>
      
            <div class="centered">
              <a href="{{route('comics.create')}}" class="my_btn">INSERISCI ALTRI COMICS</a>
            </div>
      
          </div>

    </div>

</main>

@endsection