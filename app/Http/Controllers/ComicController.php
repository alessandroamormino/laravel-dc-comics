<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // richiamo la funzione per validare i dati prima di inviarli al db
        $this->validation($request);

        $formData = $request->all();

        $newComic = new Comic();

        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // richiamo la funzione per validare i dati prima di inviarli al db
        $this->validation($request);

        // memorizzo i dati presi dal form nella pagina edit
        $formData = $request->all();

        // aggiorno i dati del record selezionato con i dati aggiornati
        $comic->update($formData);

        // salvo il record aggiornato
        $comic->save();

        // faccio il redirect alla pagina show relativa al comic che ho modificato
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // cancello il comic selezionato
        $comic->delete();

        // faccio il redirect alla pagine dei fumetti
        return redirect()->route('comics.index');
    }

    // creo una funzione che mi gestisca gli errori nei form
    private function validation($request){
        // richiamo i dati
        $formData = $request->all();

        // richiamo il Validator
        $validator = Validator::make($formData, [
            // inserisco le mie regole
            'title' => 'required|max:255|min:5',
            'description' => 'required|min:10',
            'thumb' => 'required',
            'price' => 'required|min:4',
            'series' => 'required|max:50|min:5',
            'sale_date' => 'required',
            'type' => 'required|max:50|min:5',
        ], [
            // inserisco i messaggi personalizzati per ogni tipologia di errore per ogni campo
            'title.required' => "E' necessario inserire il titolo",
            'title.max' => "Il titolo non dev'essere superiore a 255 caratteri",
            'title.min' => "Il titolo dev'essere di almeno 5 caratteri",
            'description.required' => "E' necessario inserire la descrizione",
            'description.min' => "La descrizione dev'essere di almeno 5 caratteri",
            'thumb.required' => "E' necessario inserire un'immagine di copertina",
            'price.required' => "E' necessario inserire il prezzo",
            'price.min' => "Il prezzo dev'essere composto di almeno 5 cifre, prova a metterci i decimali",
            'series.required' => "E' necessario inserire la serie del fumetto",
            'series.max' => "La serie non dev'essere superiore a 50 caratteri",
            'series.min' => "La serie dev'essere di almeno 5 caratteri",
            'sale_date.required' => "Devi inserire una data di pubblicazione",
            'type.required' => "E' necessario inserire la tipologia del fumetto",
            'type.max' => "Il tipo non dev'essere superiore a 50 caratteri",
            'type.min' => "Il tipo dev'essere di almeno 5 caratteri"
        ])->validate();

        return $validator;
    }
}
