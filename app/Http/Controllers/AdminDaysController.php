<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;

class AdminDaysController extends Controller
{
    public function AdminDays(){
        $tour=Day::all();
        return view('admin/days/index', compact('tour'));
    }
    public function AdminDaysAddShow(){
        return view('admin/days/add');
    }
    public function AdminDaysAdd(Request $request){
        $days = new Day();
        $days->name = $request->name;
        $days->save();
        return redirect()->route('admin_days');
    }
    public function AdminDaysDelete($id){
        $days=Day::find($id);
        $days->delete();
        return redirect()->back();
    }
    public function AdminDaysUpdateShow($id){
        $days=Day::find($id);
        return view('admin/days/update', compact('days'));
    }
    public function AdminDaysUpdate(Request $request, $id){
        $days=Day::find($id);
        $days->name = $request->name;
        $days->save();
        return redirect()->route('admin_days');
    }
}
