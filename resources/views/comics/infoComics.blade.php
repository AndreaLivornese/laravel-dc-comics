@extends('layouts/app')

@section("content")

<main>

    <div id="img-wrapper">
        <div class="container_small">
            <div class="img-box">
                <img src="{{$comic["thumb"]}}" alt="">
    
            </div>

        </div>
    </div>
    
    <div class="container_small">
        <div id="info">
    
            {{-- inserisco staticamente solo un singolo comics seguendo la traccia dell'esercizio --}}

            <div class="title">
                {{$comic["title"]}}
            </div>
            <div class="check-wrapper">
                <div class="price-status">
                    <div class="price">
                        <span class="opacity-05">U.S. Price:</span>
                        {{$comic["price"]}}
                    </div>
                    <div class="status opacity-05">avaiable</div>

                </div>
                <div class="check">
                    Check Availability
                </div>
            </div>
            <div class="text">
                {{$comic["description"]}}
            </div>
        </div>


        
    </div>
    <div id="specs">

        <div class="container_small">

            <div class="tables">

               <table class="my_table">

                <thead>
                        <tr>
                            <th colspan="2">
                                Talent
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Art by:</td>
                            <td>
                                @foreach($comic['artists'] as $artist)
                                    {{$artist}},
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Written by:
                            </td>
                            <td>
                                @foreach($comic['writers'] as $writer)
                                    {{$writer}},
                                @endforeach
                            </td>
                        </tr>
                    </tbody>

                </table>


                <table class="my_table">

                    <thead>
                        <tr>
                            <th colspan="2">
                                Specs
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Series:</td>
                            <td>{{$comic["series"]}}</td>
                        </tr>
                        <tr>
                            <td>
                                U.S. Price:
                            </td>
                            <td>
                                {{$comic["price"]}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                               On Sale Date:
                            </td>
                            <td>
                                {{$comic["sale_date"]}} 
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>

            <div class="btn-box">
                <a href="{{route('comics.edit', $comic->id)}}" class="my_btn btn_secondary">Modifica specifiche</a>

            </div>

        </div>


    </div>
    
</main>

@endsection