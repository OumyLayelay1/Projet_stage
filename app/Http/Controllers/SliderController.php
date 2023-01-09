<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')
                ->get();
        return view('backend.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sliders.create');
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
            'slider_image' => 'required',
            
        ], [
            'slider_image.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('slider_image')){
            $file = $request->file('slider_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/sliders/';
            if($file->move($destination, $filename)){
                $input['slider_image'] = '/uploads/sliders/'. $filename;
            }
        }
        
        $slider = Slider::create($input);
        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        return view('backend.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.sliders.edit', compact('slider'));
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
        $slider = Slider::find($id);
        $existingFilePath = $slider->slider_image;
        
        if($request->hasFile('slider_image')){
            $file = $request->file('slider_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/sliders/';
            if($file->move($destination, $filename)){
                $input['slider_image'] = '/uploads/sliders/'. $filename;
            }
        }else{
            $input = $request->except(['_token', 'slider_image']);
        }

        $slider->update($input);
        return redirect(route('sliders.index'));

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->delete();

        return response()->json(['status'=>"La suppression s'est correctement passée"]);
    }
}
