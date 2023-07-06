@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettaglio Comic</h1>
    <div class="row g-4">
        <div>
            <a href="{{route("comics.index")}}">Torna alla Comics List</a>
        </div>
        <div class="w-50">
            <h1 class="text-center">{{$comics->title}}</h4>
            <div class="text-center">
                <img class="w-75" src="{{$comics->thumb}}" alt="">
            </div>
            <p class="text-center">{{$comics->series}}</p>
        </div>
       
    </div>

</div>
@endsection