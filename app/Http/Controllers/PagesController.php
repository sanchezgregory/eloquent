<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

    public function home()
    {
        $title = "Ultimos 10 Usuarios";
        $users = User::orderBy('id','DESC')->take(10)->get();
        return view('pages.home', compact('title','users'));

    }
}
