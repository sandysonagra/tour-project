<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBrandData extends Model
{
    use HasFactory;

    protected $table = 'tour_brand_data';
    protected $fillable = [
        'tour_brand_id',
        'tour_name',
        'price',
    ];

    public function tourBrand()
    {
        return $this->belongsTo(TourBrand::class);
    }
    
}
