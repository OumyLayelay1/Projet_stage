<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('id', 'desc')
                    ->get();
        return view('backend.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.countries.create');
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
            'images' => 'required',
            'image_capital' => 'required',
        ]);
        $input = $request->except('_token');
        if($request->hasFile('images')){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid(). '.' .$extension;
            $destination = public_path(). '/uploads/countries';
            if($file->move("uploads/countries/", $filename)){
                $input['images'] = '/uploads/countries/'. $filename;
            }
            
        }
         
        if($request->hasFile('image_capital')){
            $file = $request->file('image_capital');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid(). '.' .$extension;
            if($file->move("uploads/countries/", $filename)){
                $input['image_capital'] = '/uploads/countries/'. $filename;
            }
        }
       // return dd(['filename'=>$filename,'destination'=>$destination,'filename2'=>$filename2,'destination2'=>$destination2]);
        $country = Country::create($input);
        return redirect(route('countries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::find($id);
        return view('backend.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::find($id);
        return view('backend.countries.edit', compact('country'));
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
        $country = Country::find($id);
        $existingFilePath = $country->images;
        $existingFilePath = $country->image_capital;
        
        if($request->hasFile('images')){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid(). '.' .$extension;
            $destination = public_path(). '/uploads/countries';
            if($file->move("uploads/countries/", $filename)){
                $input['images' ] = '/uploads/countries/'. $filename;
            }
        }else{
            $input = $request->except(['_token', 'images']);
        }

        if($request->hasFile('image_capital')){
            $file = $request->file('image_capital');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid(). '.' .$extension;
            if($file->move("uploads/countries/", $filename)){
                $input['image_capital'] = '/uploads/countries/'. $filename;
            }
        }else{
            $input = $request->except(['_token', 'image_capital']);
        }
        
        $country->update($input);
        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countries = Country::findOrFail($id);
        $countries->delete();
        
        return response()->json(['status'=>"La suppression s'est correctement passée"]);
    }

   /*  public function view(Request $request){
        $search = $request['search'] ?? "",
        if($search != ""){
            $countries = Country::where('titre_pays', '=', $search)->get();
        }else{
            $countries = Country::all();
        }
        
        $data = compact('countries','data');
        return view('frontend/destination')->with($data);
    } */
}
