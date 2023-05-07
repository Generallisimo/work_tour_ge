<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPhoto extends Model
{
    use HasFactory;
    protected $fillable=['photo', 'tour_id'];
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
