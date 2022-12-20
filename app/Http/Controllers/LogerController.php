<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loger;
use App\Models\Country;

class LogerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logers = Loger::orderBy('id', 'desc')
        ->get();
        return view('backend.logers.index', compact('logers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Country::all();
        return view('backend.logers.create', compact('pays'));
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
            'image_hotel' => 'required'
        ], [
            'image_hotel.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('image_hotel')){
            $file = $request->file('image_hotel');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/logers/';
            if($file->move($destination, $filename)){
                $input['image_hotel'] = '/uploads/logers/'. $filename;
            }
        }
        
        $loger = Loger::create($input);
        return redirect(route('logers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loger = Loger::find($id);
        return view('backend.logers.show', compact('loger'));
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
        $loger = Loger::find($id);
        return view('backend.logers.edit', compact('loger','pays'));
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
        $loger = Loger::find($id);
        $existingFilePath = $loger->image_hotel;
        
        if($request->hasFile('image_hotel')){
            $file = $request->file('image_hotel');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/logers/';
            if($file->move($destination, $filename)){
                $input['image_hotel'] = '/uploads/logers/'. $filename;
                //unset(public_path().$existingFilePath);
            }
        }else{
            $input = $request->except(['_token', 'image_hotel']);
        }

        $loger->update($input);
        return redirect(route('logers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logers = Loger::find($id);
        $logers->delete();
        return redirect('logers');
    }
}
