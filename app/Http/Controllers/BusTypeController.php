<?php

namespace App\Http\Controllers;

use App\BusType;
use Illuminate\Http\Request;

class BusTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bustypes=BusType::all();
        return view('backend.bustypes.index',compact('bustypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bustypes.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
         
         //"id" => 'required',
         "name" => 'required',
          "logo"=>'required'
         ]);

    $imageName = time().'.'.$request->logo->extension();

    $request->logo->move(public_path('backend/bustypeimg'),$imageName);

    $path = 'backend/bustypeimg/'.$imageName;

        $bustype=new BusType;
        //$bustype->id=$request->id;
        $bustype->name=$request->name;
        $bustype->logo=$path;
        $bustype->save();
        //redirect
        return redirect()->route('bustypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function show(BusType $busType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function edit(BusType $bustype)
    {
         return view('backend.bustypes.edit',compact('bustype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusType $bustype)
    {
        $request->validate([
         
         //"id" => 'required',
         "name" => 'required',
          "logo"=>'required'
         ]);


        $imageName = time().'.'.$request->logo->extension();

        $request->logo->move(public_path('backend/bustypeimg'),$imageName);

        $path = 'backend/bustypeimg/'.$imageName;

        //$bustype->id=$request->bus_id;
        $bustype->name=$request->name;
        $bustype->logo=$path;
        $bustype->save();
        //redirect

        return redirect()->route('bustypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusType  $busType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusType $bustype)
    {
        $bustype->delete();
        return redirect()->route('bustypes.index');
    }
}
