<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function eloquentAll()
    {

        $users = User::all();
        $title = "Todos los usuarios (ALL)";

        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGet($gender)
    {

        $title = "Todos Los Usuarios ".$gender;
        $users = User::where('gender', $gender)
            ->get();
        return view('query.get', compact('title', 'users'));
    }
    public function eloquentGetCustom()
    {

        $title = "Todos Los Usuarios Get Custom";
        $users = User::all(['id','name','email']);
            //User::where('gender','f')->get(['id', 'name', 'email']); // tambien sirve asi.
        return view('query.get', compact('title', 'users'));
    }

    public function eloquentDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $title = "Ultimos 10 Usuarios";
        $users = User::orderBy('id','DESC')->take(10)->get();
        return view('pages.home', compact('title','users'));
    }
}
