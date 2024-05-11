<?php // Code within app\Helpers\Helper.php
use App\Models\Brand;
use App\Models\Setting;

use App\Models\Blog;
use App\Models\Menu;


if (!function_exists('getVehicleBrands')) {
    function getVehicleBrands()
    {
        return Brand::where('status',1)->orderBy('name')->get();
    }
}

if (!function_exists('getVehicleBrandsfooter')) {
    function getVehicleBrandsfooter()
    {
        return Brand::where('status',1)->orderBy('name')->limit(6)->get();
    }
}

if (!function_exists('getSettings')) {
    function getSettings($key)
    {
        return Setting::where('key',$key)->first()->value;
    }
}


if (!function_exists('getCurrentMenu')) {
    function getCurrentMenu($route)
    {
        return Menu::where('route',$route)->first() ?? null;
    }
}



if (!function_exists('getCurrentBlog')) {
    function getCurrentBlog($slug)
    {
        return Blog::where('slug',$slug)->first();
        
    }
}


if (!function_exists('getCarModelsByBrand')) {
    
    function getCarModelsByBrand($brandId) {
        $carModels = Brand::where('id', $brandId)->get();
        return $carModels;
    }
}