<?php

namespace App\Http\Controllers;

use App\Models\ContinentFactor;
use Exception;
use Illuminate\Http\Request;

class FactorSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $search = $request->input('search');

        try {
            if ($search) {
                $query = ContinentFactor::with(['continent', 'factor'])->latest();
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', '%' . $search . '%')
                        ->orWhere('descriptions', 'like', '%' . $search . '%')
                        ->orWhereHas('continent', function ($q) use ($search) {
                            $q->where('name', 'like', '%' . $search . '%');
                        })
                        ->orWhereHas('factor', function ($q) use ($search) {
                            $q->where('name', 'like', '%' . $search . '%');
                        });
                });
                $factors = $query->paginate(10);
                return view('factors.result', ['factors' => $factors]);
            } else {
                throw new Exception('No data found for factor');
            }
        } catch (Exception $e) {
            return redirect('/')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
