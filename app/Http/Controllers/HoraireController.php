<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horaire;
use App\Models\Resto;

class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horaires = Horaire::orderBy('id', 'desc')
                    ->get();
        return view('backend.horaires.index', compact('horaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restos = Resto::all();
        return view('backend.horaires.create',compact('restos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'resto_id' => 'required',
            'jour' => 'required'
        ], [
            'resto_id.required' => "Le champ resto est requis",
            'jour.required' => "Le champ jour est requis",
        ]);

        $input = $request->except('_token');
        
        $horaire = Horaire::create($input);
        return redirect(route('horaires.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horaire = Horaire::find($id);
        return view('backend.horaires.show', compact('horaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resto = Resto::all();
        $horaire = Horaire::find($id);
        return view('backend.horaires.edit', compact('horaire','resto'));
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
        $horaire = Horaire::find($id);
        $horaire = Horaire::create($input);
        return redirect(route('horaires.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horaires = Horaire::find($id);
        $horaires->delete();
        return redirect('horaires');
    }
}
