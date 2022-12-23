@extends ('layouts.app')

@section('contents')
<div class="container">
    <a class="btn btn-warning m-3" href="{{route('comics.create')}}">Add</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
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
                    <td><img src="{{$comic->image}}" alt=""></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-success m-3 w-75" href="{{route('comics.show', $comic->id)}}">Details</a>
                        <a class="btn btn-warning m-3 w-75" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger m-3 w-75" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                <p>Ancora nessun fumetto!</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection