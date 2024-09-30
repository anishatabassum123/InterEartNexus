<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WeatherUpdateNotification extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @param array $weatherData
     */
    public $weatherData;
    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Weather Update Notification')
            ->view('emails.weather_update');
    }
}
