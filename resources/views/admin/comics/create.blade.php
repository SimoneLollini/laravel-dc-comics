@extends('layouts.app')

@section('contents')

<div class="container mb-5">
    <h1 class="py-5">Create a new Product</h1>
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHlper">
            <small id="titleHlper" class="text-muted">Add comics title here</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="text" name="image" id="image" class="form-control" aria-describedby="imageHlper">
            <small id="imageHlper" class="text-muted">Add the product image here</small>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input price="text" name="price" id="price" class="form-control" aria-describedby="priceHlper">
            <small id="priceHlper" class="text-muted">Add the product price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" aria-describedby="seriesHlper">
            <small id="seriesHlper" class="text-muted">Add the product series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Product sale_date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHlper">
            <small id="sale_dateHlper" class="text-muted">Add the product sale_date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input type="text" name="type" id="type" class="form-control" aria-describedby="typeHlper">
            <small id="typeHlper" class="text-muted">Add the product type here</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection