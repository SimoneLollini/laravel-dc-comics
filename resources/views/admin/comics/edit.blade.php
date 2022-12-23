@extends('layouts.app')

@section('contents')

<div class="container mb-5">
    <h1 class="py-5">Edit "{{$comic->title}}"</h1>
    <form action="{{route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="card p-3">
        @csrf
        @method ('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{$comic->title}}" type="text" name="title" id="title" class="form-control" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add comics title here</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input value="{{$comic->image}}" type="text" name="image" id="image" class="form-control" aria-describedby="imageHlper">
            <small id="imageHlper" class="text-muted">Add the product image here</small>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Description</label>
            <textarea value="{{$comic->description}}" class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{$comic->price}}" type="number" name="price" id="price" class="form-control" aria-describedby="priceHlper">
            <small id="priceHlper" class="text-muted">Add the product price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input value="{{$comic->series}}" type="text" name="series" id="series" class="form-control" aria-describedby="seriesHlper">
            <small id="seriesHlper" class="text-muted">Add the product series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Product sale_date</label>
            <input value="{{$comic->sale_date}}" type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHlper">
            <small id="sale_dateHlper" class="text-muted">Add the product sale_date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input value="{{$comic->type}}" type="text" name="type" id="type" class="form-control" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Add the product type here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection