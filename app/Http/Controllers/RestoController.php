<?php

namespace App\Http\Controllers;
use App\Models\Resto;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restos = Resto::orderBy('id', 'desc')
                    ->get();
        return view('backend.restos.index', compact('restos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Country::all();
        return view('backend.restos.create', compact('pays'));
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         /* dd($request->all());  */
        $this->validate($request, [
            'image_restaurant' => 'required',
            'pays_id' => 'required'
        ], [
            'pays_id.required' => "Le champ pays est requis",
            'image_restaurant.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('image_restaurant')){
            $file = $request->file('image_restaurant');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/restos/';
            if($file->move($destination, $filename)){
                $input['image_restaurant'] = '/uploads/restos/'. $filename;
            }
        }
        
        $resto = Resto::create($input);
        return redirect(route('restos.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resto = Resto::find($id);
        return view('backend.restos.show', compact('resto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pays = Country::all();
        $resto = Resto::find($id);
        return view('backend.restos.edit', compact('resto','pays'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resto = Resto::find($id);
        $existingFilePath = $resto->image_restaurant;
        
        if($request->hasFile('image_restaurant')){
            $file = $request->file('image_restaurant');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/restos/';
            if($file->move($destination, $filename)){
                $input['image_restaurant'] = '/uploads/restos/'. $filename;
                //unset(public_path().$existingFilePath);
            }
        }else{
            $input = $request->except(['_token', 'image_restaurant']);
        }

        $resto->update($input);
        return redirect(route('restos.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restos = Resto::findOrFail($id);
        $restos->delete();
        return response()->json(['status'=>"La suppression s'est correctement passée"]);
    }
}
