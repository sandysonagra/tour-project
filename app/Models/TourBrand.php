<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBrand extends Model
{
    use HasFactory;

    protected $table = 'tour_brand';
    
    protected $fillable = [
        'tour_id',
        'brand_name',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    public function tourBrandData()
{
    return $this->hasMany(TourBrandData::class);
}

}
