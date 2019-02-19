<?php

namespace App\Http\Controllers;

use App\Maintenance;
use App\Site;
use App\Tache;
use Illuminate\Http\Request;

class MaintenancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 'Technicien') {

            $tasks = Tache::where('attribuee_a', auth()->user()->id)->pluck('attribuee_a');
            $maintenances = Maintenance::orderBy('created_at', 'desc')
                ->where('cree_par', '=', auth()->user()->id)
                ->orWhereIn('id', $tasks)
                ->paginate(25);

        } else if (auth()->user()->role == 'Chef de projet') {
            $maintenances = Maintenance::orderBy('created_at', 'desc')
                ->where('cree_par', '=', auth()->user()->id)
                ->paginate(25);
        }else {
            $maintenances = Maintenance::orderBy('created_at', 'desc')
                ->paginate(25);
        }
        return view('maintenances.index', compact('maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        return view('maintenances.ajouter', compact('sites'));
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
            'id_site' => 'required|exists:sites,id',
        ]);

        $maintenance = new Maintenance();
        $maintenance->nom = $request->get('nom');
        $maintenance->description = $request->get('description');
        $maintenance->id_site = $request->get('id_site');
        $maintenance->cree_par = auth()->user()->id;
        $maintenance->save();

        return redirect('maintenance');
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
