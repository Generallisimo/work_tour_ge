<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function day(){
        return $this->belongsTo(Day::class);
    }
    public function photos(){
        return $this->hasMany(TourPhoto::class);
    }
}
