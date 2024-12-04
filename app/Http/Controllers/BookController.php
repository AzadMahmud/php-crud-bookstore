<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
{
    if ($request->has("search")) {
        $search = $request->get('search');
        $books = Book::query()
            ->where("title", "like", "%" . $search . "%")
            ->orWhere("author", "like", "%" . $search . "%") 
            ->paginate(10);
    } else {
        $books = Book::paginate(10);
    }

    return view('books.index')->with('books', $books);
}

    public function view($id){
        $book = Book::find($id);
        return view('books.view')->with('book', $book);
    }
    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books.edit')->with('book', $book);
    }
    public function update(Request $request){
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'isbn' => 'required|numeric|digits:13',
            'stock' => 'required|numeric|integer|min:0',
            'price' => 'required|numeric'
        ];
        $this->validate($request, $rules);

        $book = Book::findOrFail($request->id);

        $book->title = $request->title;
        $book->author= $request->author;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->save();

        return redirect()->route('books.view', $book->id);
        
        
    }
    public function create(){
        return view('books.create');
    }
    public function store(Request $request) {

        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'isbn' => 'required|numeric|digits:13',
            'stock' => 'required|numeric|integer|min:0',
            'price' => 'required|numeric'
        ];

        $this->validate($request, $rules);

        $book = new Book;

        $book->title= $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->stock= $request->stock;
        $book->price= $request->price;
        $book->save();

        return redirect()->route('books.view', $book->id);

    }
    public function destroy(Request $request) {
        $book = Book::findOrFail($request->id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');  
    }    
}