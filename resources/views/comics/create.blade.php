@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create Comic Books</h1>
    <div class="row g-4 p-4">
        <div class="col">
            <form action="{{route("comics.store")}}" method="post">
                @csrf
                <label for="name">title</label>
                <input class="form-control" type="text" name="title">

                <label class="pt-3" for="name">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>

                <label class="pt-3" for="name">image</label>
                <input class="form-control" type="text" name="thumb">

                <label class="pt-3" for="name">price</label>
                <input class="form-control" type="text" name="price">

                <label class="pt-3" for="name">series</label>
                <input class="form-control" type="text" name="series">

                <label class="pt-3" for="name">sale_date</label>
                <input class="form-control" type="text" name="sale_date">

                <label class="pt-3" for="name">type</label>
                <input class="form-control" type="text" name="type">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
                
            </form>
        </div>
       
    </div>

</div>
@endsection