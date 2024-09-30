<?php

namespace App\Console\Commands;

use App\Mail\WeatherUpdateNotification;
use App\Models\User;
use App\Services\WeatherService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    protected $description = 'Send weather information to users';

    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        parent::__construct();
        $this->weatherService = $weatherService;
    }

    public function handle()
    {
        // Log::channel('weather')->info('weather: call command from server at ' . now());
        User::chunk(60, function ($users) {
            foreach ($users as $user) {
                if ($user->city) {
                    // Check if the weather data for the city is already cached
                    $cacheKey = 'weather_' . $user->city;
                    $responsedata = Cache::remember($cacheKey, now()->addHours(12), function () use ($user) {
                        return $this->weatherService->getLocationByCity($user->city);
                    });

                    // Validate the response data
                    if ($responsedata && is_array($responsedata) && !isset($responsedata['error'])) {
                        // Log the response data
                        // Log::channel('weather')->info('weather: ' . json_encode($responsedata));

                        // Send the email
                        Mail::to($user)->send(new WeatherUpdateNotification($responsedata));

                        // Delay for 1 second before sending the next email
                        sleep(1);
                    } else {
                        Log::channel('weather')->info('Invalid weather data for city: ' . $user->city);
                    }
                }
            }

            // Delay for 1 minute before processing the next chunk
            sleep(60);
        });

        $this->info('Weather emails sent successfully!');
    }
}
