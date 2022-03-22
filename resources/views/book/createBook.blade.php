@extends('layouts.app')

@section('content')

    <div class="content row mt-5">
        <div class="col-3">

        </div>
        <div class="col-6">
            <form action="{{ route('addBook') }}" name="addform" id="addform" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Naziv knjige</label>
                    <input type="text" class="form-control" id="bookName" name="bookName" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ime autora</label>
                    <input type="text" class="form-control" id="authorName" name="authorName" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Opis</label>

                    <textarea class="form-control" id="description" rows="8"  name="description" placeholder="Zašto pročitati ovu knjigu." required> </textarea>

                </div>

                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>

    </div>

@endsection
