<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	 //return 'INDEX';
    	$title = 'Welcome to Laravel jmaa';
    	 //return view('pages.index', compact('title'));
    	//return view('pages.index')->with('title', $title);
        //return CategorieController.index();
        $cat = new CategorieController();
        return $cat.index();
	}

	public function about(){
    	 //return 'INDEX';
    	 return view('pages.about');
	}

	public function services(){
    	 //return 'INDEX';
    	 return view('pages.services');
	}

    public function navbar(){
        return view('pages.navbar');
    }
    public function sidebar(){
        return view('pages.sidebar');
    }
}
   
