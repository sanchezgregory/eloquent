<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;

use App\User;
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
        $categories = Category::whereHas('books', function($query){
            $query->where('status','Publico');
        })->get();
        $title = "Relacion de libros con categoria -- mostrando solo publicos y contando los publicos y los borradores";


        return view('books.relation', compact('categories', 'title'));
    }

    public function bookOfOwner() {
        $users = User::all();
        $title = "Quienes han escrito cuales libros";

        return view('books.bookofowner', compact('users', 'title'));
    }

}
