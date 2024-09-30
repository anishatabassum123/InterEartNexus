<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Exception;
use Illuminate\Http\Request;

class WeatherSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, WeatherService $weatherService)
    {
        $search = $request->input('search');
        try {
            $weather = $weatherService->getLocationByCity($search);


            if (!$weather) {
                throw new Exception('Unable to fetch weather data');
            }
            return view('weather', ['weatherData' => $weather]);
        } catch (\Throwable $th) {
            abort(404);
        }
    }
}
