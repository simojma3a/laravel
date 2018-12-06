<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use DB;
//use App\Categorie;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$service = Service::paginate(6);
        //return view('service.index')->with('service', $service);
        $service = Service::all();
        return view('Pages.services')->with('service', $service);
        //return view('Pages.services',compact(['categorie', $categorie,'service', $service]));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
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
            'name' => 'required|max:255',
            'name' => 'required|max:255',
            'adresse' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
    
        $service = new Service;
        $service->name = $request->name;
        $service->adresse = $request->adresse;
        $service->phone = $request->phone;
        $service->email = $request->email;
        $service->position = $request->position;
        $service->photo = $request->photo;
        $service->save();
    
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /* $categorie = Categorie::findOrFail($id);
        return view('Categories.show')->with('categorie', $categorie); */

        $service = Service::findOrFail($id);//->paginate(5);
        return view('Service.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, int $id)
    {
        
        /*$serv = DB::table('service')
                            ->where('id', $id)
                            ->get();*/

        $user_id = Service::select('*')->where('id', $id)->first();
        $user = User::select("*")
                    ->where('id', $user_id->user_id)
                   ->first();
        Service::findOrFail($id)->delete();
       return view('profile.show')->with('user', $user)->with('services', $user->services);
    }


    public function indexx()
    {
        $service = Service::all();
        return view('service.index')->with('service', $service);
    }
}
