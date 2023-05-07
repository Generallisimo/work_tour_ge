<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Day;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AdminTourController extends Controller
{
    public function AdminTour(){
        $days = Day::all();
        $categories = Category::all();
        $tour = Tour::all();
        return view('admin/tours/index', compact('tour', 'days', 'categories'));
    }
    public function AdminTourAddShow(){
        $days = Day::all();
        $categories = Category::all();
        return view('admin/tours/add', compact('days', 'categories'));
    }
    public function AdminTourAdd(Request $request){
        $image = $request->file('image');
        $images = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('images'), $images);
        $tour = new Tour();
        $tour->name = $request->name;
        $tour->description = nl2br($request->description);
        $tour->price = $request->price;
        $tour->image = $images;
        $tour->day_id = $request->day_id;
        $tour->category_id = $request->category_id;
        $tour->save();
        return redirect()->route('admin_tour')->with('success', 'Send new Tour');
    }   
    public function AdminTourDelete($id){
        $tour = Tour::find($id);
        $tour->delete();
        return redirect()->back()->with('success', 'Delete Tour');
    }
    public function AdminTourUpdateShow($id){
        $tour = Tour::findOrFail($id);
        $days = Day::all();
        $categories = Category::all();
        return view('admin/tours/update', compact('tour', 'days', 'categories'));
    } 
    public function AdminTourUpdate(Request $request, $tour_id){
        $tour=Tour::findOrFail($tour_id);
        $tour->name = $request->name;
        $tour->description = $request->description;
        $tour->price = $request->price;
        $tour->category_id = $request->category_id;
        $tour->day_id = $request->day_id;
        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'image'
            ]);
            
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $request->file('image')->move(public_path('images'), $filename);
            $tour->image = $filename;
        } elseif ($tour->image) {
            // если новое изображение не было загружено и текущее изображение уже есть, оставляем текущее изображение
            $tour->image = $tour->image;
        }
        
        $tour->save();
        return redirect()->route('admin_tour')->with('success', 'Update Tour');
    }
}
