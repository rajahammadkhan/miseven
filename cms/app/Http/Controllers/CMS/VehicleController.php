<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\VehicleFeature;
use App\Models\VehicleGalleryImage;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cms.vehicles.index');
    }

    public function datatable()
    {
        $vehicle = Vehicle::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($vehicle)->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'isEdit'    =>  false,
            'brands'    =>  Brand::where('status',1)->get(),
        ];

        return view('cms.vehicles.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'name' => 'required',
        ]);
        
        $vehicle         =   new Vehicle;

        $image = Storage::disk('cms')->putFile('', $request->featured_image);
        $vehicle->featured_image  =   $image;

        $vehicle->brand_id   =   $request->brand_id;
        $vehicle->car_type   =   $request->car_type;
        $vehicle->name   =   $request->name;
        $vehicle->price   =   $request->price;
        $vehicle->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $vehicle->description   =   $request->description;
        $vehicle->model_year   =   $request->model_year;
        $vehicle->location   =   $request->location;
        $vehicle->save();

        foreach($request->feature_name as $key => $feature_name){
            $vehicle_feature                =   new VehicleFeature;
            $vehicle_feature->vehicle_id    =   $vehicle->id;
            $vehicle_feature->name          =   $feature_name;
            $vehicle_feature->value         =   $request->feature_value[$key];
            $vehicle_feature->save();
        }

        if($request->has('multi_images')){
            foreach($request->multi_images as $gallery_img){
                $vehicle_gallery                =   new VehicleGalleryImage;
                $vehicle_gallery->vehicle_id    =   $vehicle->id;

                $imageName = Storage::disk('cms')->putFile('', $gallery_img);
                $vehicle_gallery->image  =   $imageName;
                $vehicle_gallery->save();
            }
        }
        VehicleFeature::where('name', 'Engine')->update(['is_featured' => 1]);
        VehicleFeature::where('name', 'Seats')->update(['is_featured' => 1]);
        VehicleFeature::where('name', 'Doors')->update(['is_featured' => 1]);
        VehicleFeature::where('name', 'Deposit')->update(['is_featured' => 1]);

        return redirect()->route('vehicles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $data = [
            'isEdit'   => true,
            'brands'    =>  Brand::where('status',1)->get(),
            'vehicle'    => $vehicle->load('features'),
            'image'    => $vehicle->load('images'),
        ];

        // return $data['vehicle'];

        return view('cms.vehicles.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle, VehicleFeature $vehicle_feature, VehicleGalleryImage $vehicle_gallery)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $vehicle         =   Vehicle::find($request->id);
        $vehicle->brand_id   =   $request->brand_id;
        $vehicle->car_type   =   $request->car_type;
        $vehicle->name   =   $request->name;
        $vehicle->price   =   $request->price;
        $vehicle->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $vehicle->description   =   $request->description;
        $vehicle->model_year   =   $request->model_year;
        $vehicle->location   =   $request->location;
        if ($request->featured_image == null) {
             $vehicle->featured_image;            
        }
        else{
            $image = Storage::disk('cms')->putFile('', $request->featured_image);
            $vehicle->featured_image  =   $image;
        }
        
        $vehicle->save();
        if($vehicle_feature->value != $request->feature_value[0]){
            
            foreach($request->featureid as $key => $feature_name){
                $hello                =   VehicleFeature::where('id', $request->featureid[$key])->first();
                $hello->name          =   $request->feature_name[$key];
                $hello->value         =   $request->feature_value[$key];
                $hello->save();
            }  
            
        }
        else{
           
            foreach($request->feature_name as $key => $feature_name){
                $vehicle_feature                =   new VehicleFeature;
                $vehicle_feature->vehicle_id    =   $vehicle->id;
                $vehicle_feature->name          =   $feature_name;
                $vehicle_feature->value         =   $request->feature_value[$key];
                $vehicle_feature->save();
                // dd($vehicle_feature);
            }          
        }
        if($request->has('multi_images')){
            foreach($request->multi_images as $gallery_img){
                $vehicle_gallery                =   new VehicleGalleryImage;
                $vehicle_gallery->vehicle_id    =   $vehicle->id;

                $imageName = Storage::disk('cms')->putFile('', $gallery_img);
                $vehicle_gallery->image  =   $imageName;
                $vehicle_gallery->save();
            }
        }

        return redirect()->route('vehicles');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = Vehicle::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            
        }
        return response()->json($response, 200);
    }

    public function is_featured(Request $request)
    {

        $is_featured = $request->featured;
        $id = $request->id;

        $item = Vehicle::find($id);

        if($item->is_featured == 1){
            $item->is_featured = 0;
            $item->save();
        } 
        else{
            $item->is_featured = 1;
            $item->save();
        }       

        if ($item->save()) {
            $response['is_featured'] = true;
            $response['message'] = 'Featured Updated Successfully!';

            
        }
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        VehicleFeature::where('vehicle_id', $request->deleteId)->delete();
        VehicleGalleryImage::where('vehicle_id', $request->deleteId)->delete();
        $vehicle = Vehicle::where('id', $request->deleteId)->first();
        $vehicle->delete();

        return response()->json($vehicle, 200);
    }

    public function imagedestroy(Request $request)
    {
        $vehicleimage = VehicleGalleryImage::where('id', $request->deleteId);
        $vehicleimage->delete();


        return response()->json($vehicleimage, 200);
    }

    public function featuredestroy(Request $request)
    {
        $vehiclefeature = VehicleFeature::where('id', $request->deletefeatureId);
        $vehiclefeature->delete();


        return response()->json($vehiclefeature, 200);
    }

    public function features(Request $request)
    {
        VehicleFeature::where('name', 'Engine')->update(['is_featured' => 1]);
        VehicleFeature::where('name', 'Seats')->update(['is_featured' => 1]);
        VehicleFeature::where('name', 'Doors')->update(['is_featured' => 1]);
        VehicleFeature::where('name', 'Deposit')->update(['is_featured' => 1]);
        return redirect()->route('vehicles');
        
    }
}
