@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettaglio Singolo Comic</h1>
    <div >
        <div>
            <a href="{{route("comics.index")}}">Torna alla Comics List</a>
        </div>
        <div class="d-flex pt-5">
            <div class="w-50">
                <h1 class="text-center">{{$comic->title}}</h4>
                <div class="text-center">
                    <img class="w-75" src="{{$comic->thumb}}" alt="">
                </div>
                <h4 class="text-center pt-3">Series: {{$comic->series}}</h4>
            </div>
            <div class="w-50 d-flex flex-column justify-content-center">
                <p>Book Type: {{$comic->type}}</p>
                <p>Price: ${{$comic->price}}</p>
                <p>Sale Date: {{$comic->sale_date}}</p>
                <h3>Description</h3>
                <p>{{$comic->description}}</p>
            </div>

        </div>
       
    </div>

</div>
@endsection