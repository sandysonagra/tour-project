<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceRules extends Model
{
    use HasFactory;
    protected $table = 'price_rules';

    protected $fillable = [
        'status',
        'priority',
        'value',
        'apply_to',
    ];

    public function tourBrandData()
    {
        return $this->belongsTo(TourBrandData::class, 'apply_to');
    }
}
