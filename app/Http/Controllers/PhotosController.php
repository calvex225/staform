<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Tache;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Tache $tache
     * @return \Illuminate\Http\Response
     */
    public function index(Tache $tache)
    {
        $photos = Photo::where('id_tache', $tache->id)->get();
        return view('photos.index', compact('photos', 'tache'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Tache $tache
     * @return \Illuminate\Http\Response
     */
    public function create(Tache $tache)
    {
        return view('photos.ajouter', compact('tache'));
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
            'tache_id' => 'required|exists:taches,id',
            'commentaire' => 'required',
            'etat' => 'required',
            'image' => 'required',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->image->store('/taches');
        }

        $photo = new Photo();
        $photo->id_tache = $request->get('tache_id');
        $photo->commentaire = $request->get('commentaire');
        $photo->etat = $request->get('etat');
        $photo->image = $path;
        $photo->save();

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
