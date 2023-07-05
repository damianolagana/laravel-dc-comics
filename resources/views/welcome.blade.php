@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>DC Comics</h1>
    <div class="row g-4">
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="w-25">
                    <h4>{{$comic->title}}</h4>
                    <div class="w-50">
                        <img class="w-75" src="{{$comic->thumb}}" alt="">
                    </div>
                    <p>{{$comic->series}}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection