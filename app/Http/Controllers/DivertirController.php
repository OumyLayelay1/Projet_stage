<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divertir;
use App\Models\Country;

class DivertirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divertirs = Divertir::orderBy('id', 'desc')
                    ->get();
        return view('backend.divertirs.index', compact('divertirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Country::all();
        return view('backend.divertirs.create',compact('pays'));
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
            'image_distraction' => 'required',
            'pays_id' => 'required'
        ], [
            'pays_id.required' => "Le champ pays est requis",
            'image_distraction.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('image_distraction')){
            $file = $request->file('image_distraction');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/divertirs/';
            if($file->move($destination, $filename)){
                $input['image_distraction'] = '/uploads/divertirs/'. $filename;
            }
        }
        
        $divertir = Divertir::create($input);
        return redirect(route('divertirs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $divertir = Divertir::find($id);
        return view('backend.divertirs.show', compact('divertir'));
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
        $divertir = Divertir::find($id);
        return view('backend.divertirs.edit', compact('divertir','pays'));
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
        $divertir = Divertir::find($id);
        $existingFilePath = $divertir->image_distraction;
        
        if($request->hasFile('image_distraction')){
            $file = $request->file('image_distraction');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/divertirs/';
            if($file->move($destination, $filename)){
                $input['image_distraction'] = '/uploads/divertirs/'. $filename;
                //unset(public_path().$existingFilePath);
            }
        }else{
            $input = $request->except(['_token', 'image_distraction']);
        }

        $divertir->update($input);
        return redirect(route('divertirs.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $divertirs = Divertir::find($id);
        $divertirs->delete();
        return redirect('divertirs');
    }
}
