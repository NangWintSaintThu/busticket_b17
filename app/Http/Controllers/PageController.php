<?php

namespace App\Http\Controllers;
use App\City;
use App\BusCompany;
use App\Route;
use App\BusType;
use App\Traveller;
use App\BookingDetail;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
	{      
        $bustypes=BusType::all();
        $cities=City::all();

        $routes=Route::all();
        
		return view('frontend.home',compact('cities','bustypes','routes'));

    }


     public function about($value='')
	{
		return view('frontend.about');
    }

    

     public function selectseat($value='')
	 {
		return view('frontend.selectseat'/*,compact('search')*/);

    $bustypes=Bustype::all();
		return view('frontend.selectseat',compact('bustypes'));

    }

     
      public function book(Request $request)
	{
     return view('frontend.book');
    }

  
     public function contact($value='')
	{
		return view('frontend.contact');

}
      public function loginfun($value='')
	{
		return view('frontend.login');
}     
       public function register($value='')
	{
		return view('frontend.register');
}
  
     

     public function searchfun(Request $request)
    {

        $cities=City::all();

        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->city_seat;

        $city_time=$request->city_time;

       // for route
        // dd($request);
        $routes=Route::where('departure_station',$leavingfrom)->where('arrival_station',$goingto)->get();
        
        $bustypes = BusType::all();
       
        return view ('frontend.search',compact('routes','leavingfrom','goingto','city_seat','cities','city_time','city_seat','city_date')) ; 
        

    }
     public function cityfun($value='')
    {
       $routes=Route::all();
        return view ('backend.cities.index',compact('routes')) ;
        
    }

    public function routefun($value='')
    {
        return view ('backend.routes.index') ;   
    }
    
    public function bustypefun($value='')
    {
       
        return view ('backend.bustypes.index') ;
        
    }
    public function buscompanyfun($value='')
    {
       
        return view ('backend.buscompanies.index') ;
        
    }

	public function travellerinfo($value='')
	{
		return view('backend.travellerinfos.index');
	}

	public function bookingdetail($value='')
	{
		return view('backend.bookingdetails.bookingdetaillist');
	}
    public function seatfun(Request $request)
  {

        //$seats=Seat::all();
        $cities=City::all();
        $route = Route::find($request->route_id);
        $bookingdetails = BookingDetail::where('route_id',$request->route_id)->get();
        $leavingfrom=$request->leavingfrom;
        $goingto=$request->goingto;
        $city_date=$request->city_date;
        $city_seat=$request->seat;
        $city_time=$request->time;
        // dd($city_seat);
        return view ('frontend.seat',compact('cities','leavingfrom','goingto','city_date','city_seat','route','bookingdetails')) ;  
            
  }

  public function yourticket($value='')
  {
      $bustypes=BusType::all();
        $cities=City::all();

        $routes=Route::all();
        
        return view('frontend.home',compact('cities','bustypes','routes'));
  }

  public function userinfofun($value='')
  {
    return view('frontend.userinfo');

  }

}