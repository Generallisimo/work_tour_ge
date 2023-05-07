<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Day;
use App\Models\Tour;
use App\Models\TourPhoto;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function Tour(){
        $tour = Tour::inRandomOrder()->limit(6)->get();
        return view('tour/index', compact('tour'));
    }
    public function TourCategory(Request $request){
        $query = Tour::query();
        $search = $request->input('search');
        if($request->filled('search')){
            $search=$request->input('search');
            $query->where('name', 'LIKE', '%'.$search.'%')
                    ->orWhere('description', 'LIKE', '%'.$search.'%');
        }
        if($request->filled('price_from')){
            $query->where('price', '>=', $request->input('price_from'));
        }
        if($request->filled('price_to')){
            $query->where('price', '<=', $request->input('price_to'));
        }
        if($request->filled('day_id')){
            $query->where('day_id', $request->input('day_id'));
        }
        if($request->filled('category_id')){
            $query->where('category_id', $request->input('category_id'));
        }
        $tours = $query->get();
        $days = Day::all();
        $categories = Category::all();
        // $days = Tour::distinct('date')->pluck('date');
        // dd($categories);
        return view('tour/category/index', compact('tours','days', 'categories'));
    }
    public function TourCategoryTour($id){
        $tour = Tour::find($id);
        $count = TourPhoto::all();
        return view('tour/category/tour', compact('tour', 'count'));
    }
}
