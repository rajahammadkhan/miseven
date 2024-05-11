<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'coupecount'        =>  Vehicle::where('car_type','Coupe')->count(),
            'luxurycount'        =>  Vehicle::where('car_type','Luxury')->count(),
            'suvcount'        =>  Vehicle::where('car_type','SUV')->count(),
            'sportcount'        =>  Vehicle::where('car_type','Sports')->count(),
            'convertiblecount'        =>  Vehicle::where('car_type','Convertible')->count(),

            'audicount'        =>  Vehicle::where('brand_id','31')->count(),
            'nissancount'        =>  Vehicle::where('brand_id','44')->count(),
            'rangerovercount'        =>  Vehicle::where('brand_id','35')->count(),
            'mercedescount'        =>  Vehicle::where('brand_id','34')->count(),
            'lamborghinicount'        =>  Vehicle::where('brand_id','33')->count(),            

            'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
            'social_twitter' => Setting::where('key', 'social_twitter')->first(),
            'social_facebook' => Setting::where('key', 'social_facebook')->first(),
            'social_instagram' => Setting::where('key', 'social_instagram')->first(),
            'blogs' => Blog::limit(3)->get(),
            'featured_vehicles' => Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->where('is_featured',1)->get(),
            'featured_vehicles1' => Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->where('is_featured',1)->limit(3)->get(),
        ];

        return view('home',$data);
    }
}
