<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleriImage;
use App\Models\Country;

class GalleriImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $galleri_images = GalleriImage::table('galleri_images') 
                ->inRandomOrder() 
                ->limit(4) 
                ->get();  */
        $galleri_images = GalleriImage::orderBy('id', 'desc')
                        ->get();
        return view('backend.galleri_images.index', compact('galleri_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Country::all();
        return view('backend.galleri_images.create',compact('pays'));
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
            'image' => 'required',
            'pays_id' => 'required'
        ], [
            'pays_id.required' => "Le champ pays est requis",
            'image.required' => "Le champ image est requis"
        ]);
        $input = $request->except('_token');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/galleri_images/';
            if($file->move($destination, $filename)){
                $input['image'] = '/uploads/galleri_images/'. $filename;
            }
        }
        
        $galleri_image = GalleriImage::create($input);
        return redirect(route('galleri_images.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galleri_image = GalleriImage::find($id);
        return view('backend.galleri_images.show', compact('galleri_image'));
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
        $galleri_image = GalleriImage::find($id);
        return view('backend.galleri_images.edit', compact('galleri_image','pays'));
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
        $galleri_image = GalleriImage::find($id);
        $existingFilePath = $galleri_image->image;
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $destination = public_path(). '/uploads/galleri_images/';
            if($file->move($destination, $filename)){
                $input['image'] = '/uploads/galleri_images/'. $filename;
                //unset(public_path().$existingFilePath);
            }
        }else{
            $input = $request->except(['_token', 'image']);
        }

        $galleri_image->update($input);
        return redirect(route('galleri_images.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleri_images = GalleriImage::find($id);
        $galleri_images->delete();
        return redirect('galleri_images');
    }
}
