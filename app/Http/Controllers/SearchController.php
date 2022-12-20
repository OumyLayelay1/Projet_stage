<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function search(){
        $search = request()->input('search');

        dd('$search');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = url('/search');
        $title = "Les plus beaux endroits à visiter en Afrique";
        $search = null;
        $data = compact('url','title','search');

        return view('/destination')->with('$data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $search = New Search;

        $search->image = $request('image');
        $search->name = $request('name');

        $search->save();

        return redirect('destination');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $search = Search::find($id);
        if(is_null ($search)){
            return redirect('destination');
        }else{
            $title = 'update Search';
            $url = url('/destination/update') ."/". $id;
            $data = compact('url','title','search');

            return view('/destination')->with('$data');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $search = Search::find($id);
        $search->image = $request('image');
        $search->name = $request('name');

        $search->save();

        return redirect('destination');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
