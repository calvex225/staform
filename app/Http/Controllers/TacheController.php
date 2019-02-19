<?php

namespace App\Http\Controllers;

use App\Maintenance;
use App\Tache;
use App\User;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Maintenance $maintenance)
    {
        $taches = Tache::where('maintenance_id', $maintenance->id)->get();
        return view('taches.index', compact('taches', 'maintenance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Maintenance $maintenance)
    {
        $users = User::all();
        return view('taches.ajouter', compact('maintenance', 'users'));
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
            'nom' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'attribuee_a' => 'required|exists:users,id',
            'maintenance_id' => 'required|exists:maintenances,id',
            'statut' => 'required|string',
        ]);

        $tache = new Tache();
        $tache->nom = $request->get('nom');
        $tache->description = $request->get('description');
        $tache->date_debut = $request->get('date_debut');
        $tache->date_fin = $request->get('date_fin');
        $tache->attribuee_a = $request->get('attribuee_a');
        $tache->maintenance_id = $request->get('maintenance_id');
        $tache->cree_par = auth()->user()->id;
        $tache->statut = $request->get('statut');
        $tache->save();

        return back();
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
