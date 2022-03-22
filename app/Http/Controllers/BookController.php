<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.createBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->name = $request->get('bookName');
        $book->author = $request->get('authorName');
        $book->description = $request->get('description');
        $book->save();

        $message = "Uspešno ste dodali knjigu";
        return redirect()->route('home')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($bookId)
    {

        $book = Book::find($bookId);
        return view('book.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book = Book::find($request->get('idBook'));
        $book->name = $request->get('bookName');
        $book->author = $request->get('authorName');
        $book->description = $request->get('description');
        $book->save();

        $message = "Uspešno ste izmenili podatke";
        return redirect()->route('home')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
    public function delete($bookId)
    {
        $book = Book::find($bookId);
        $book->delete();

        $message = "Uspešno ste obrisali knjigu";
        return redirect()->route('home')->with('message', $message);
    }
}
