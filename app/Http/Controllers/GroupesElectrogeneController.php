<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupeElectrogene;
use App\Site;

class GroupesElectrogeneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupe_electrogenes = GroupeElectrogene::orderBy('created_at', 'desc')->paginate(25);
        return view('electrogenes.index', compact('groupe_electrogenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        return view('electrogenes.ajouter', compact('sites'));
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
            'code' => 'required|string',
            'type' => 'required|string',
            'marque' => 'required|string',
            'puissance' => 'required|string',
            'utilisation' => 'required',
        ]);

        //Creer un Utilisateur
        $groupeElectrogene = new GroupeElectrogene();
        $groupeElectrogene->code = $request->input('code');
        $groupeElectrogene->type = $request->input('type');
        $groupeElectrogene->marque = $request->input('marque');
        $groupeElectrogene->puissance = $request->input('puissance');
        $groupeElectrogene->utilisation = $request->input('utilisation');
        $groupeElectrogene->id_site = $request->input('id_site');
        $groupeElectrogene->save();

        return redirect('/electrogene');
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
