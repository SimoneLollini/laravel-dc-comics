<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
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
        // dd($request->title);
        $val_data = $request->validated();

        $newComic = Comic::create($val_data);
        // $data = $request->all();
        // $newComics = new Comic();
        // $newComics->title = $request['title'];
        // $newComics->description = $request['description'];
        // $newComics->image = $request['image'];
        // $newComics->price = $request['price'];
        // $newComics->series = $request['series'];
        // $newComics->sale_date = $request['sale_date'];
        // $newComics->type = $request['type'];
        // $newComics->save();
        return to_route('comics.index')->with('message', "$newComic->title added!");
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
        $data = $request->all();
        $comic->update($data);
        return to_route('comics.index')->with('message', "$comic->title update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "$comic->title deleted!");
    }
}
