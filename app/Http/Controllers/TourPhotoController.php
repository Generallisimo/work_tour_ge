<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourPhoto;
use Illuminate\Http\Request;

class TourPhotoController extends Controller
{
    public function TourPhoto(){
        $tour = Tour::all();
        return view('admin/photos/index', compact('tour'));
    }
    public function TourPhotoAddShow($id){
        $tour=Tour::find($id);
        return view('admin/photos/add', compact('tour'));
    }
    public function TourPhotoAdd(Request $request, $id){
        $tour=Tour::find($id);
        // dd($tour);
        $image = $request->file('photo');
        $filename = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        $photo = new TourPhoto();
        $photo->photo = $filename;
        $photo->tour_id = $request->tour_id;
        $photo->save();
        return redirect()->route('tour_photo', compact('tour'));
    }
    public function TourPhotoDeleteShow($id){
        $tour=Tour::find($id);
        return view('admin/photos/show', compact('tour'));
    }
    public function TourPhotoDelete($id){
        $photo=TourPhoto::find($id);
        $photo->delete();
        return redirect()->route('tour_photo');
    }
}
