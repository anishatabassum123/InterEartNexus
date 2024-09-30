<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('OPENWEATHER_API_KEY');
        // $this->apiKey = env('ACCUWEATHER_API_KEY');
    }

    public function getWeather($locationKey)
    {
        $response = $this->client->get("http://dataservice.accuweather.com/currentconditions/v1/{$locationKey}", [
            'query' => [
                'apikey' => $this->apiKey,
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getLocationKey($city)
    {

        $response = $this->client->get("http://dataservice.accuweather.com/locations/v1/cities/search", [
            'query' => [
                'apikey' => $this->apiKey,
                'q' => $city,
            ]
        ]);

        $locations = json_decode($response->getBody()->getContents(), true);
        return $locations[0]['Key'] ?? null;
    }

    public function getLocationByCity($city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}";

        $response = Http::get($url);

        if ($response->successful()) {
            return $this->formateData($response->json());
        } else {
            return false;
        }
    }
    public function formateData(array $weatherArray)
    {
        return [
            'location' => $weatherArray['name'],
            'coordinates' => [
                'longitude' => $weatherArray['coord']['lon'],
                'latitude' => $weatherArray['coord']['lat']
            ],
            'weather' => [
                'main' => $weatherArray['weather'][0]['main'],
                'description' => $weatherArray['weather'][0]['description'],

            ],
            'temperature' => [
                'current' => $weatherArray['main']['temp'],
                'feels_like' => $weatherArray['main']['feels_like'],
                'min' => $weatherArray['main']['temp_min'],
                'max' => $weatherArray['main']['temp_max']
            ],

            'humidity' => $weatherArray['main']['humidity'],

            'wind' => [
                'speed' => $weatherArray['wind']['speed'],

            ],
            'rain' => $weatherArray['rain']['1h'] ?? 'No data',
            'cloudiness' => $weatherArray['clouds']['all'],

            'country' => $weatherArray['sys']['country']
        ];
    }
}
