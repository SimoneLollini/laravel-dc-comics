<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicsRequest $request)
    {
        $data = $request->all();
        $newComics = new Comic();
        $newComics->title = $request['title'];
        $newComics->description = $request['description'];
        $newComics->image = $request['image'];
        $newComics->price = $request['price'];
        $newComics->series = $request['series'];
        $newComics->sale_date = $request['sale_date'];
        $newComics->type = $request['type'];
        $newComics->save();
        return redirect()->route('comics.index', $newComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicsRequest  $request
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicsRequest $request, Comic $comic)
    {
        //dd($comic);
        $data = $request->all();
        // dd($data);
        $comic->update($data);
        return redirect()->route('comics.show', ["comic" => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comics)
    {
        //
    }
}
