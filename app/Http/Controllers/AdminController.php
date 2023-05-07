<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(){
        $count=Tour::count();
        return view('admin/index', compact('count'));
    }
}
