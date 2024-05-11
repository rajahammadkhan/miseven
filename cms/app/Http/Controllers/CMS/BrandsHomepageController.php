<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Models\brandsHomepage;
use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;




class BrandsHomepageController extends Controller
{
    public function datatable()
    {
        $brand = brandsHomepage::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($brand)->toJson();
    }

    public function create()
    {
        $data = [
            'isEdit' => false,
        ];

        return view('cms.pages.home.section_two.add', $data);
    }
    
     public function store(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        // ]);

        // return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        
        $brand         =   new brandsHomepage;

        if($request->has('logo')){
            $imageName = Storage::disk('cms')->putFile('', $request->logo);
            $brand->image  =   $imageName;
            $brand->save();

        }
        $brand->save();

        return redirect()->route('other_pages.home');
    }

    public function edit(brandsHomepage $brand)
    {
        $data = [
            'isEdit'                => true,
            'brand'    => $brand,
        ];

        // return $data['brand'];

        return view('cms.pages.home.section_two.add', $data);
    }

    public function update(Request $request, brandsHomepage $brand)
    {

        if($request->has('logo')){
            Storage::disk('cms')->delete('', $brand->logo);
            $imageName = Storage::disk('cms')->putFile('', $request->logo);
            $brand->image  =   $imageName;
        }

        $brand->save();

        return redirect()->route('other_pages.home');
    }

      public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = brandsHomepage::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

     public function destroy(Request $request)
    {
        $brand = brandsHomepage::where('id', $request->deleteId)->first();
        $brand->delete();

        return response()->json($brand, 200);
    }
}
