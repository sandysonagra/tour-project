<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourBrandData;
use App\Models\Tour;
use App\Models\PriceRules;

class PriceRuleController extends Controller
{
    public function create()
    {
        $tours = Tour::all();
        $tourBrandData = TourBrandData::all();
        return view('create', compact('tours', 'tourBrandData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string|max:255',
            'priority' => 'required|integer',
            'value' => 'required|numeric',
            'tour_id' => 'required|exists:tour_brand_data,id',
        ]);

        $priceRule = new PriceRules;
        $priceRule->status = $request->status;
        $priceRule->priority = $request->priority;
        $priceRule->value = $request->value;
        $priceRule->apply_to = $request->tour_id;
        $priceRule->save();

        return redirect()->route('table');
    }

    public function table()
    {
        $priceRules = PriceRules::with('tourBrandData.tourBrand.tour')->get();

        return view('table', compact('priceRules'));
    }
}
