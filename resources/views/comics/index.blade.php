@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>DC Comics</h1>
    <div class="row g-4">
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="w-25 p-3 border border-2">
                    <h4 class="text-center"><a href="{{route("comics.show",$comic->id)}}">{{$comic->title}}</a></h4>
                    <div class="text-center imgBox">
                        <img class="w-75" src="{{$comic->thumb}}" alt="">
                    </div>
                    <p class="text-center">{{$comic->series}}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection