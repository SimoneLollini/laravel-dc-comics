@extends ('layouts.app')

@section('contents')
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale_date</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
            <tr class="">
                <td scope="row">{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->image}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
            </tr>
            @empty
            <p>Ancora nessun fumetto!</p>
            @endforelse
        </tbody>
    </table>
</div>

@endsection