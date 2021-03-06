<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::all();
        return view('Pages.sidebar')->with('categories', $categorie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
    
        $categorie = new categorie;
        $categorie->title = $request->title;
        $categorie->photo = "https://lorempixel.com/640/480/?35278";
        $categorie->save();
    
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);//->paginate(5);
        return view('Categories.show')->with('categorie', $categorie)
        ->with('services', $categorie->services)
        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('Categories.edit')->with('categorie', $categorie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //TODO validate
        $request->validate([
            'title' => 'required|max:255',
        ]
        );
        $categorie = Categorie::findOrFail($id);
        $categorie->title = $request->get('title');
        $categorie->save();
        $categorie = Categorie::all();
        return view('home')->with('categorie', $categorie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        Categorie::findOrFail($id)->delete();
        //session::put('success', 'Your Record Deleted Successfully.');
        return redirect('home');
    }
}
