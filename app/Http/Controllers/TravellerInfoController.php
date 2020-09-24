<?php

namespace App\Http\Controllers;
use App\User;
use App\Bookingdetail;
use App\Travllerinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TravellerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travellers=Travllerinfo::all();


        return view('backend.travellerinfos.index',compact('travellers'));


        //return view('backend.travellerinfos.travellerinfolist',compact('travellerinfos'));

        // return view('backend.travellerinfos.index');


        return view('backend.travellerinfos.travellerinfolist',compact('travellerinfos'));
}

        // return view('backend.travellerinfos.index');

     


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $travller_info = new Travllerinfo;
        $travller_info->user_id = $user->id;
        $travller_info->phone_no = $request->phonenumber;
        $travller_info->address = $request->textarea;
        $travller_info->save();

        $booking_detail = new Bookingdetail;
        $booking_detail->travllerinfo_id=$travller_info->id;
        $booking_detail->route_id=$request->route_id;
        $booking_detail->no_people=$request->no_people;
        $booking_detail->seat_no=$request->seat_no;
        $booking_detail->total=$request->total;
        $booking_detail->departure_date=$request->departure_date;
        $booking_detail->save();
        return redirect()->route('homepage')->with('message','Your Booking Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function show(Travllerinfo $travellerInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Travllerinfo $travellerInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travllerinfo $travellerInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travllerinfo $travellerInfo)
    {
        //
    }
}
