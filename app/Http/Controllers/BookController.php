<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(10);
        return view('books.index')->with('books', $books);
    }
    public function view($id){
        $book = Book::find($id);
        return view('books.view')->with('book', $book);
    }
}
