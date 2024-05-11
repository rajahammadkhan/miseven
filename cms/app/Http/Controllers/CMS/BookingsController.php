<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookings;
use DataTables;
use Illuminate\Support\Facades\Storage;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'booking' =>  Bookings::get(),
        ];
        return view('cms.booking.index', $data);
    }

    public function datatable()
    {
        $booking = Bookings::orderByDesc('id')->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($booking)->toJson();
    }

    public function destroy(Request $request)
    {
        $booking = Bookings::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $booking->image);
        $booking->delete();

        return response()->json($booking, 200);
    }
}
