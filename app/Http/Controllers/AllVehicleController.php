<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Booking;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;
use DateTime;


class AllVehicleController extends Controller
{
    public function index()
    {
        $data = [
            'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
            'vehicles' => Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->get(),
        ];

        return view('all-vehicles',$data);
    }

    public function getVehicleAgainstBrand($slug)
    {
        $brand = Brand::where('slug',$slug)->first();

        $data = [
            'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
            'vehicles' => Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('brand_id',$brand->id)->where('status',1)->get(),

            'brand_name'    =>  $brand->name,
            
            'meta_title'            =>  $brand->meta_title,
            'meta_description'      =>  $brand->meta_description,
            'keywords'              =>  $brand->keywords,
        ];

        return view('all-vehicles',$data);
    }

    public function getVehicleAgainstType($type)
    {
        $brand = Vehicle::where('car_type',$type)->first();

        if ($brand === null) {  
            $data = [
                'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
                'vehicles' => Vehicle::with(['features' => function($query){
                    $query->where('is_featured',0);
                }])->where('status',0)->get(),
            ];
            
        }
        else{
            $data = [
                'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
                'vehicles' => Vehicle::with(['features' => function($query){
                    $query->where('is_featured',1);
                }])->where('car_type',$brand->car_type)->where('status',1)->get(),

                'brand_name'    =>  $brand->name,
                
                'meta_title'            =>  $brand->meta_title,
                'meta_description'      =>  $brand->meta_description,
                'keywords'              =>  $brand->keywords,
            ];   
        }

        return view('all-vehicles',$data);
    }

    public function search(Request $request)
    {
        $earlier = new DateTime($request->start_date);
        $later = new DateTime($request->end_date);

        $abs_diff = $later->diff($earlier)->format("%a");
        if($request->ra != ''){
            $vehicle = Vehicle::with(['features' => function($query){
                    $query->where('is_featured',1);
                }])->where('status',1)->where('car_type',$request->ra)->get();
        }
        else{
            $vehicle = Vehicle::with(['features' => function($query){
                    $query->where('is_featured',1);
                }])->where('status',1)->get();
        }

        $data = [
            'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
            'noOfDays'      =>  $abs_diff+1,
            'start_date'    =>  $request->start_date,
            'end_date'    =>  $request->end_date,
            'start_time'    =>  $request->start_time,
            'end_time'    =>  $request->end_time,
            'vehicles'  =>  $vehicle,
        ];

        return view('all-vehicles-search',$data);
    }

    public function post(Request $request)
    {
        // return $request;
        $earlier = new DateTime($request->start_date);
        $later = new DateTime($request->end_date);

        $abs_diff = $later->diff($earlier)->format("%a");

        $vehicle = Vehicle::with('features','gallery_images')->where('id',$request->vehicle_id)->first();

        $data = [
            'noOfDays'      =>  $abs_diff+1,
            'start_date'    =>  $request->start_date,
            'end_date'    =>  $request->end_date,
            'start_time'    =>  $request->start_time,
            'end_time'    =>  $request->end_time,
            'total_amount'    =>  $request->total_amount,
        ];

        return view('vehicle-detail',['vehicle' => $vehicle],['data' => $data]);

        // return redirect()->route('vehicle_detail',$data['vehicle']->slug)->with(['data' => $data]);
    }

    public function detail($slug)
    {
        $data['vehicle'] = Vehicle::with('features','gallery_images')->where('slug',$slug)->first();

        return view('vehicle-detail',$data);
    }

    public function store(Request $request)
    {
        $vehicle    =   Vehicle::where('id',$request->vehicle_id)->first();

        if(isset($request->no_of_days)){
            $noOfDays   =   $request->no_of_days;
            $totalAmount = $request->total_amount;
        }else{
            $earlier = new DateTime($request->start_date);
            $later = new DateTime($request->end_date);

            $abs_diff = $later->diff($earlier)->format("%a");
            $noOfDays   =   $abs_diff+1;
            $totalAmount = $vehicle->price * $noOfDays;
        }

        $booking                =   new Booking;
        $booking->vehicle_id    =   $request->vehicle_id;
        $booking->start_date    =   $request->start_date;
        $booking->end_date      =   $request->end_date;
        $booking->start_time    =   $request->start_time;
        $booking->end_time      =   $request->end_time;
        $booking->no_of_days    =   $noOfDays;
        $booking->total_amount  =   $totalAmount;
        $booking->car_name      =   $request->car_name;
        $booking->first_name    =   $request->first_name;
        $booking->last_name     =   $request->last_name;
        $booking->email         =   $request->email1;
        $booking->contact_no    =   $request->contact_no;
        $booking->save();

        // return "adasd";

        // Mail::to('booking@vipalfarental.ae')->send(new BookingMail($booking));
        // Mail::cc($request->email)->send(new BookingMail($booking));
        

        return view('vehicle-detail',['vehicle' => $vehicle],['success' => 'YOUR REQUEST FOR VEHICLE BOOKING HAS BEEN SUBMITTED SUCCESSFULLY']);
    }

//----------------------------------------------------sorting All Vehicles start
    public function sortingByNew()
    {   
        $vehicle = Vehicle::orderBy('id', 'desc')->get();
        $data[
            'vehicles'] = Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->get();
        return view('all-vehicles',$data);

    }

     public function sortingByPriceHigh()
    {   
        $vehicle = Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->orderBy('price', 'desc')->get();
        $data = [            
            'vehicles' => $vehicle,
            'vehicle_filter' => Vehicle::get(),

        ];
        return view('all-vehicles',$data);
    }

    public function sortingByPriceLow()
    {   
        // $vehicle = Vehicle::orderBy('price', 'asc')->get();
        $vehicle = Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->orderBy('price', 'asc')->get();
        $data = [            
            'vehicles' => $vehicle,
            'vehicle_filter' => Vehicle::get(),

        ];
        return view('all-vehicles',$data);
    }
}
