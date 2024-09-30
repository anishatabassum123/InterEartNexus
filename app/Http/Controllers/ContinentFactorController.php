<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\ContinentFactor;
use App\Models\Country;
use App\Models\Factor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContinentFactorController extends Controller
{
    public function index()
    {

        $factors = ContinentFactor::with(['continent', 'factor'])->latest()->paginate(10);

        return view('continentFactors.index', ['factors' => $factors]);
    }

    public function create()
    {

        $continents = Continent::all();
        $factors = Factor::all();
        return view('continentFactors.create', ['continents' => $continents, 'factors' => $factors]);
    }

    public function show(ContinentFactor $factor)
    {

        return view('continentFactors.show', ['factor' => $factor]);
    }

    public function store(Request $request)
    {
        // return "cont";
        try {
            $validated = $request->validate([
                'continent_id' => [
                    'required',
                    'exists:continents,id',
                    Rule::unique('continent_factors')->where(function ($query) use ($request) {
                        return $query->where('continent_id', $request->continent_id)
                            ->where('factor_id', $request->factor_id);
                    }),
                ],
                'factor_id' => 'required|exists:factors,id',
                'descriptions' => ['required', 'string'],
                'title' => ['required', 'string'],
                'image' => 'nullable|image|max:2048',
                'video_url' => ['nullable', 'string', 'active_url'],
            ], [
                'continent_id.unique' => 'This continent-factor combination already exists.',
            ]);

            // Rest of the code...


            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $validated['image'] = "images/" . $imageName;
            }

            ContinentFactor::create($validated);

            return redirect('/continent_factor');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => $th->getMessage()]);
        }
    }
    public function edit(ContinentFactor $con_factor)
    {

        $factors = Factor::all();
        $continents = Continent::all();
        return view('continentFactors.edit', ['continents' => $continents, 'con_factor' => $con_factor, 'factors' => $factors]);
    }
    public function update(Request $request, ContinentFactor  $factor)
    {
        $validated = $request->validate([

            'descriptions' => ['required', 'string'],
            'title' => ['required', 'string'],
            'image' => 'nullable|image|max:2048',
            'video_url' => ['nullable', 'string', 'active_url'],
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            // $file = $request->file('image');
            // dd($file->getMimeType());
            if ($factor->image && file_exists(public_path($factor->image))) {
                unlink(public_path($factor->image));
            }

            // Upload the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = "images/" . $imageName;
        }


        $factor->update($validated);

        return redirect('/continent_factor');
    }
    public function destroy(ContinentFactor $factor)
    {
        $factor->delete();
        return  redirect('/factor');
    }
    public function showContinent($code)
    {
        $continent = Continent::with('factors.factor')->where('code', $code)->first();

        // dd($continent);
        // return redirect('/continent');
        if ($code == 'af') {
            return view('continents.africa', ['continent' => $continent]);
        } elseif ($code == 'as') {
            return view('continents.asia', ['continent' => $continent]);
        } elseif ($code == 'eu') {
            return view('continents.europe', ['continent' => $continent]);
        } elseif ($code == 'na') {
            return view('continents.northamerica', ['continent' => $continent]);
        } elseif ($code == 'sa') {
            return view('continents.sauthamerica', ['continent' => $continent]);
        } elseif ($code == 'au') {
            return view('continents.australia', ['continent' => $continent]);
        } else {
            return view('continents.antarctica', ['continent' => $continent]);
        }
    }
    public function showContinentFactor(Factor $factor, $continent)
    {
        $continent = Continent::with('factors.factor')->where('code', $continent)->first();
        $continent_factor = ContinentFactor::with('factor')->where('factor_id', $factor->id)->where('continent_id', $continent->id)->first();

        $continents = Continent::all();
        return view('continentFactors.continent-factor-default', ['continent_factor' => $continent_factor, 'continent' => $continent, 'continents' => $continents]);
    }
}
