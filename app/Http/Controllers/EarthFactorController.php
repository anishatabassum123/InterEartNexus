<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use App\Models\EarthFactor;
use Illuminate\Http\Request;

class EarthFactorController extends Controller
{
    public function index()
    {
        $factors = EarthFactor::latest()->paginate(10);
        return view('factors.index', ['factors' => $factors]);
    }

    public function show(EarthFactor $factor)
    {
        return view('factors.show', ['factor' => $factor]);
    }
    public function create()
    {
        $countries = Country::all();
        $continents = Continent::all();
        return view('factors.create', ['countries' => $countries, 'continents' => $continents]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'continent' => ['string', 'max:100'],
            'country' => ['string', 'max:100'],
            'rain_assumption' => ['nullable', 'string'],
            'land_soility' => ['nullable', 'string'],
            'forest_assumption' => ['nullable', 'string'],
            'temperature' => ['nullable', 'string'],
            'perception' => ['nullable', 'string'],
            'humidity' => ['nullable', 'string'],
            'warning_alerts' => ['nullable', 'string'],
            'wind' => ['nullable', 'string'],
            'air_quality' => ['nullable', 'string'],
            'climate_change_note' => ['nullable', 'string'],
            'co2_assumption' => ['nullable', 'string'],

        ]);
        $country = Country::with('continent')->where('name', $request->country)->first();

        if ($country) {
            EarthFactor::create($validated + ['continent' => $country->continent->name]);
        } else {
            // Handle the case where the country is not found
            return redirect()->back()->withErrors(['country' => 'Country not found']);
        }

        return redirect('/factor');
    }
    public function edit(EarthFactor $factor)
    {
        $countries = Country::all();
        $continents = Continent::all();
        return view('factors.edit', ['countries' => $countries, 'continents' => $continents, 'factor' => $factor]);
    }
    public function update(Request $request, EarthFactor  $factor)
    {
        $validated = $request->validate([
            'continent' => ['string', 'max:100'],
            'country' => ['string', 'max:100'],
            'rain_assumption' => ['nullable', 'string'],
            'land_soility' => ['nullable', 'string'],
            'forest_assumption' => ['nullable', 'string'],
            'temperature' => ['nullable', 'string'],
            'perception' => ['nullable', 'string'],
            'humidity' => ['nullable', 'string'],
            'warning_alerts' => ['nullable', 'string'],
            'wind' => ['nullable', 'string'],
            'air_quality' => ['nullable', 'string'],
            'climate_change_note' => ['nullable', 'string'],
            'co2_assumption' => ['nullable', 'string'],

        ]);
        $country = Country::with('continent')->where('name', $request->country)->first();

        if ($country) {
            $factor->update($validated + ['continent' => $country->continent->name]);
        } else {
            // Handle the case where the country is not found
            return redirect()->back()->withErrors(['country' => 'Country not found']);
        }
        return redirect('/factor');
    }
    public function destroy(EarthFactor $factor)
    {
        $factor->delete();
        return  redirect('/factor');
    }
}
