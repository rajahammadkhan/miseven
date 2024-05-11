<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_Form;
use DataTables;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'contact' =>  Contact_Form::get(),
        ];
        return view('cms.contact.index', $data);
    }

    public function datatable()
    {
        $contact = Contact_Form::orderByDesc('id')->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($contact)->toJson();
    }

    public function destroy(Request $request)
    {
        $contact = Contact_Form::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $contact->image);
        $contact->delete();

        return response()->json($contact, 200);
    }
}
