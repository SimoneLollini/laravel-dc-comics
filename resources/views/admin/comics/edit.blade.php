@extends('layouts.app')

@section('contents')

<div class="container mb-5 py-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 class="py-5">Edit "{{$comic->title}}"</h1>
    <form action="{{route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="card p-3">
        @csrf
        @method ('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHlper" value="{{ old('title', $comic->title) }}">
            <small id="titleHlper" class="text-muted">Add comics title here</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="text" name="image" id="image" class="form-control" aria-describedby="imageHlper" value="{{ old('image', $comic->image) }}">
            <small id="imageHlper" class="text-muted">Add the product image here</small>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4" value="{{ old('description', $comic->description) }}"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input step="00.1" type="number" name="price" id="price" class="form-control" aria-describedby="priceHlper" value="{{ old('price', $comic->price) }}">
            <small id="priceHlper" class="text-muted">Add the product price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input value="{{$comic->series}}" type="text" name="series" id="series" class="form-control" aria-describedby="seriesHlper" value="{{ old('series', $comic->series) }}">
            <small id="seriesHlper" class="text-muted">Add the product series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Product sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHlper" value="{{ old('sale_date', $comic->sale_date) }}">
            <small id="sale_dateHlper" class="text-muted">Add the product sale_date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input type="text" name="type" id="type" class="form-control" aria-describedby="typeHlper" value="{{ old('type', $comic->type) }}">
            <small id="typeHlper" class="text-muted">Add the product type here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection