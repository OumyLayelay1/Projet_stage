<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Bouger;
class BougerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bougers = Bouger::orderBy('id', 'desc')
                ->get();
        return view('backend.bougers.index', compact('bougers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Country::all();
        return view('backend.bougers.create', compact('pays'));
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
            'image_bouger' => 'required',
            'pays_id' => 'required'
        ], [
            'pays_id.required' => "Le champ pays est requis",
            'image_bouger.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('image_bouger')){
            $file = $request->file('image_bouger');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/bougers/';
            if($file->move($destination, $filename)){
                $input['image_bouger'] = '/uploads/bougers/'. $filename;
            }
        }
        
        $bouger = Bouger::create($input);
        return redirect(route('bougers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bouger = Bouger::find($id);
        return view('backend.bougers.show', compact('bouger'));
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
        $bouger = Bouger::find($id);
        return view('backend.bougers.edit', compact('bouger','pays'));
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
        $bouger = Bouger::find($id);
        $existingFilePath = $bouger->image_bouger;
        
        if($request->hasFile('image_bouger')){
            $file = $request->file('image_bouger');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/bougers/';
            if($file->move($destination, $filename)){
                $input['image_bouger'] = '/uploads/bougers/'. $filename;
                //unset(public_path().$existingFilePath);
            }
        }else{
            $input = $request->except(['_token', 'image_bouger']);
        }

        $bouger->update($input);
        return redirect(route('bougers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bougers = Bouger::find($id);
        $bougers->delete();
        return redirect('bougers');
    }
}
