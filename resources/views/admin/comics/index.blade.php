@extends ('layouts.app')

@section('contents')
<div class="container p-3">
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
            </svg>
            <span class="info_message">
                {{session('message')}}
            </span>
        </strong>
    </div>
    @endif

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
                    <th scope="col">Tools</th>
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

<script>
    var alertList = document.querySelectorAll('.alert');
    alertList.forEach(function(alert) {
        new bootstrap.Alert(alert)
    })
</script>
@endsection