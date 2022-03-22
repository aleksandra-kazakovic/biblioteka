@extends('layouts.app')

@section('content')

    <div class="content row">
        <div class="col-3 ">
        </div>
        <div class="col-6">
            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100  sm:items-center py-4 sm:pt-0">

                <div class="">
                    <div class="">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Naziv</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Opis</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <th scope="row"></th>
                                    <td class="align-middle">{{$book->name}}</td>
                                    <td class="align-middle">{{$book->author}}</td>
                                    <td class="text-justify">{{$book->description}}</td>
                                    <td class="align-middle">
                                        <a class="btn btn-warning" href="book/{{$book->id}}" ><i class="nc-icon nc-ruler-pencil"></i></a>

                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-danger" href="book/delete/{{$book->id}}" ><i class="nc-icon nc-simple-remove"></i></a>

                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>


                </div>

            </div>
        </div>

    </div>

@endsection
