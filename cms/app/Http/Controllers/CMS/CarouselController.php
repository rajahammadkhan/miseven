<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Models\carousel;
use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function datatable()
    {
        $carousel = carousel::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($carousel)->toJson();
    }

    public function create()
    {
        $data = [
            'isEdit' => false,
        ];

        return view('cms.pages.home.section_one.add', $data);
    }


     public function store(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        // ]);

        // return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        
        $carousel         =   new carousel;

        if($request->has('image')){
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $carousel->image  =   $imageName;
        }
        $carousel->brand = $request->name;
        $carousel->model = $request->model_name;
        $carousel->rent = $request->amount;
        $carousel->url = $request->url;
        $carousel->save();

        return redirect()->route('other_pages.home');
    }

    public function edit(carousel $carousel)
    {
        $data = [
            'isEdit'                => true,
            'carousel'    => $carousel,
        ];

        // return $data['carousel'];

        return view('cms.pages.home.section_one.add', $data);
    }
    public function update(Request $request, carousel $carousel)
        {

            if($request->has('image')){
                Storage::disk('cms')->delete('', $carousel->image);
                $imageName = Storage::disk('cms')->putFile('', $request->image);
                $carousel->image  =   $imageName;
            }
            
        $carousel->brand = $request->name;        
        $carousel->model = $request->model_name;

        $carousel->rent = $request->amount;
        $carousel->url = $request->url;
            $carousel->save();

            return redirect()->route('other_pages.home');
        }

     public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = carousel::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }
    public function destroy(Request $request)
    {
        $carousel = carousel::where('id', $request->deleteId)->first();
        $carousel->delete();

        return response()->json($carousel, 200);
    }
    

}
