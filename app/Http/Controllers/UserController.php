<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ownerOfBook()
    {
        $books = Book::all();
        $title = "Los libros y sus autores";

        return view('books.ownerofbook', compact('books', 'title'));
    }
}
