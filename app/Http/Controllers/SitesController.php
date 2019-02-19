<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use App\SiteType;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::orderBy('created_at', 'desc')->paginate(25);
        return view('sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site_types = SiteType::all();
        return view('sites.ajouter', compact('site_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'reference' => 'required|string|max:5',
            'nom' => 'required|string',
            'zone' => 'required|string',
            'coordonnees_gps' => 'required|string',
            'id_sitetype' => 'required|integer',
        ]);

        //Creer un Utilisateur
        $site = new Site;
        $site->reference = $request->input('reference');
        $site->nom = $request->input('nom');
        $site->zone = $request->input('zone');
        $site->coordonnees_gps = $request->input('coordonnees_gps');
        $site->id_sitetype = $request->input('id_sitetype');
        $site->save();

        return redirect('/site');
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
    public function destroy($id)
    {
        //
    }
}
