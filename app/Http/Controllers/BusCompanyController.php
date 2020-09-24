<?php

namespace App\Http\Controllers;

use App\BusCompany;
use Illuminate\Http\Request;

class BusCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       $buscompanies=BusCompany::all();
       //dd($items);

       //return view('backend.buscompanies.index');
            
       return view('backend.buscompanies.index',compact('buscompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('backend.buscompanies.create');
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
            "name"=>'required',
            "phoneno"=>'required',
            "logo"=>'required',
            "ownername"=>'required',
            "address"=>'required'
        ]);
         $imageName = time().'.'.$request->logo->extension();

    $request->logo->move(public_path('backend/buscompanyimg'),$imageName);

    $path = 'backend/buscompanyimg/'.$imageName;


        $buscompany=new BusCompany;
        $buscompany->name=$request->name;
        $buscompany->phone_no=$request->phoneno;
        $buscompany->logo=$path;
        $buscompany->owner_name=$request->ownername;
        $buscompany->address=$request->address;
        $buscompany->save();

        return redirect()->route('buscompanies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function show(BusCompany $busCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(BusCompany $buscompany)
    {
         return view('backend.buscompanies.edit',compact('buscompany'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusCompany $buscompany)
    {
         $request->validate([
            "name"=>'required',
            "phoneno"=>'required',
            "logo"=>'required',
            "ownername"=>'required',
            "address"=>'required'
        ]);
         $imageName = time().'.'.$request->logo->extension();

    $request->logo->move(public_path('backend/buscompanyimg'),$imageName);

    $path = 'backend/buscompanyimg/'.$imageName;

        $buscompany->name=$request->name;
        $buscompany->phone_no=$request->phoneno;
        $buscompany->logo=$path;
        $buscompany->owner_name=$request->ownername;
        $buscompany->address=$request->address;
        $buscompany->save();

        return redirect()->route('buscompanies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusCompany  $busCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusCompany $buscompany)
    {
         $buscompany->delete();
        return redirect()->route('buscompanies.index');
    }

}
