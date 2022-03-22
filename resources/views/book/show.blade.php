@extends('layouts.app')

@section('content')

    <div class="content row mt-5">
        <div class="col-3">

        </div>
        <div class="col-6">
            <form action="{{ route('update') }}" name="addform" id="addform" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="idBook" id="idBook" value="{{$book->id}}" >
                    <label for="exampleInputEmail1">Naziv knjige</label>
                    <input type="text" class="form-control" id="bookName" name="bookName" required value="{{$book->name}}">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ime autora</label>
                    <input type="text" class="form-control" id="authorName" name="authorName" required value="{{$book->author}}">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Opis</label>

                    <textarea class="form-control" rows="8" id="description" name="description" required >{{$book->description}} </textarea>

                </div>

                <button type="submit" class="btn btn-primary">Izmeni</button>
            </form>
        </div>

    </div>

@endsection
