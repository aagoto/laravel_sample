<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function new()
    {
        return view('books.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|nullable|string|max:255',
            'auther' => 'nullable|string|max:255',
            'categroy_name' => 'nullable|string|max:255',
            'impressions' => 'nullable|string|max:255',
        ]);

        $book = new Book;
        $book -> fill($request->all())->save();

        return redirect('books')->with('flash_message',__('Registered.'));
    }

    public function index()
    {
        $books = Book::all();
        return view('books/index',['books' => $books]);
    }

    public function edit($id)
    {
        if(!ctype_digit($id)){
            return redirect('/books/new')->with('flash_message',__('Invalid operation was performed.'));
        }

        $book = Book::find($id);
        return view('books.edit',['book' => $book]);
    }

    public function update(Request $request,$id)
    {
        if(!ctype_digit($id)){
            return redirect('/books/new')->with('flash_message',__('Invalid operation was performed.'));
        }

        $book = Book::find($id);
        $book ->fill($request->all())->save();
        return redirect('/books')->with('flash_message',__('Updated.'));
    }

    public function destroy($id)
    {
        if(!ctype_digit($id)){
            return redirect('/books/new')->with('flash_message',__('Invalid operation was performed.'));
        }

        $book = Book::find($id);
        $book ->delete();
        return redirect('/books')->with('flash_message',__('Deleted.'));
    }

    public function show($id)
    {
        if(!ctype_digit($id)){
            return redirect('/books/new')->with('flash_message',__('Invalid operation was performed.'));
        }

        $book = Book::find($id);
        return view('books.show',['book' => $book]);
    }
}
