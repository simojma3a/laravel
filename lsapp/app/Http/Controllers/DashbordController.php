<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class DashbordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::all();//:paginate(5);
        return view('home')->with('categorie', $categorie);
    }
}

   
