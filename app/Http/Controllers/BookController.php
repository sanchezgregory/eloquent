<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function preDestroy()
    {
        $books = Book::all();
        $title = "Borrado masivo";
        return view('books.delete', compact('books','title'));
    }

    public function bookCategory()
    {
        $categories = Category::has('books')->get();
        $title = "Relacion de libros con categoria";


        return view('books.relation', compact('categories', 'title'));
    }

}
