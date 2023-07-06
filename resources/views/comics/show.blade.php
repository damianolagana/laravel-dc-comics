@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettaglio Comic</h1>
    <div >
        <div>
            <a href="{{route("comics.index")}}">Torna alla Comics List</a>
        </div>
        <div class="d-flex pt-5">
            <div class="w-50">
                <h1 class="text-center">{{$comics->title}}</h4>
                <div class="text-center">
                    <img class="w-75" src="{{$comics->thumb}}" alt="">
                </div>
                <p class="text-center">{{$comics->series}}</p>
            </div>
            <div class="w-50">
                <h3>Description</h3>
                <p>{{$comics->description}}</p>
                <p>Book Type: {{$comics->type}}</p>
                <p>Price: ${{$comics->price}}</p>
                <p>Sale Date: {{$comics->sale_date}}</p>
            </div>

        </div>
       
    </div>

</div>
@endsection