<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use DateTime;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $comicList = Comic::orderBy('title')->orderBy('sale_date')->get();

        foreach ($comicList as $comic) {
            $comic['sale_date'] = date_format(new DateTime($comic['sale_date']), 'd/m/Y');
        }
        return view('comics.index', compact('comicList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newComic = $request->all();
        $comic = new Comic();
        $comic->fill($newComic);
        $comic->save();
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        
        $comic['sale_date'] = date_format(new DateTime($comic['sale_date']), 'd/m/Y');

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comic->update($request->all());
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        
    }
}
