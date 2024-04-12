<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.home", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.inserimento");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();
    
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['src-img'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];

        //crea un arrey di parole dall stringa 
        $str = explode(" ", $data['artists']);
        $newComic->artists = $str;

        //crea un arrey di parole dall stringa
        $str = explode(" ", $data['writers']);
        $newComic->writers = $str;

        $newComic->save();

        echo "Dati correttamente inseriti. Ti stiamo rindirizzando alla pagina home...";
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view("comics.infoComics", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit_specs", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['src-img'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        //crea un arrey di parole dall stringa 
        $str = explode(" ", $data['artists']);
        $comic->artists = $str;

        //crea un arrey di parole dall stringa
        $str = explode(" ", $data['writers']);
        $comic->writers = $str;

        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
