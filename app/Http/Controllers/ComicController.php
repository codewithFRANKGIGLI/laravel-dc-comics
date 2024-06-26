<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
// use per validator
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
        $data = [
            'comics' => $comics
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        // $request->validate([
            // 'title' => 'required|min:5|max:50',
            // 'description' => 'required|max:255',
            // 'thumb' => 'required|max:255',
            // 'price' => 'required|max:255',
        // ]);
        // create comic + validazione
        $formData = $request->all();
        $this->validation($formData);
        $newComic = new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->type = $formData['type'];
        $newComic->fillable($formData);
        $newComic->save();

        return redirect()->route('comics.show', ['comic'=>$newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        // se uso solo find devo usare if:
        // if(!$comic) {
        //     abort(404);
        // };
        $data = [
            'comic' => $comic
        ];
        return view('comics.show', $data);
    }
    // versione breve dello show
    // public function show(Comic $comic) {
    //     return view('comics.show', compact('comic');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $data = [
            'comic' => $comic
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $this->validation($formData);
        $comic = Comic::findOrFail($id);
        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }

    // funzione per la validation
    private function validation($data) {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:5|max:50',
                'description' => 'required|min:50',
                'thumb' => 'required|max:255',
                'price' => 'nullable',
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.min' => 'Il titolo deve avere almeno 5 caratteri',
                'title.max' => 'Il titolo deve avere al massimo 50 caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'description.max' => 'La descrizione deve avere almeno 50 caratteri',
                'thumb.required' => 'Il campo immagine deve avere un URL valido'
            ]
        )->validate();
        return $validator;
    }
}
