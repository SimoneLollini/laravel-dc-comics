@extends('layouts.app')

@section('contents')
<section class="show">
    <div class="details">Comic: {{$comic->id}}</div>
    <div class="details"><img src="{{$comic->image}}" alt=""></div>
    <h2 class="details">{{$comic->title}}</h2>
    <div class="details">{{$comic->price}}</div>
    <div class="details">{{$comic->series}}</div>
    <div class="details">{{$comic->sale_date}}</div>
    <div class="details">{{$comic->type}}</div>








</section>
@endsection