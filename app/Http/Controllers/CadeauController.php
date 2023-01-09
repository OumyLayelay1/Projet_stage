<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadeau;
use App\Models\Country;

class CadeauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadeaus = Cadeau::orderBy('id', 'desc')
                ->get();
        return view('backend.cadeaus.index', compact('cadeaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Country::all();
        return view('backend.cadeaus.create',compact('pays'));
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
            'image_marche' => 'required',
            'pays_id' => 'required'
        ], [
            'pays_id.required' => "Le champ pays est requis",
            'image_marche.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('image_marche')){
            $file = $request->file('image_marche');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/cadeaus/';
            if($file->move($destination, $filename)){
                $input['image_marche'] = '/uploads/cadeaus/'. $filename;
            }
        }
        
        $cadeau = Cadeau::create($input);
        return redirect(route('cadeaus.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadeau = Cadeau::find($id);
        return view('backend.cadeaus.show', compact('cadeau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pays = Country::all();
        $cadeau = Cadeau::find($id);
        return view('backend.cadeaus.edit', compact('cadeau','pays'));
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
        $cadeau = Cadeau::find($id);
        $existingFilePath = $cadeau->image_marche;
        
        if($request->hasFile('image_marche')){
            $file = $request->file('image_marche');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/cadeaus/';
            if($file->move($destination, $filename)){
                $input['image_marche'] = '/uploads/cadeaus/'. $filename;
                //unset(public_path().$existingFilePath);
            }
        }else{
            $input = $request->except(['_token', 'image_marche']);
        }

        $cadeau->update($input);
        return redirect(route('cadeaus.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadeaus = Cadeau::findOrFail($id);
        $cadeaus->delete();

        return response()->json(['status'=>"La suppression s'est correctement passée"]);
    }
}
