<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Update Notification</title>
</head>

<body>
    {{-- {{ dd($weatherData) }} --}}
    <h1>Inter Earth Nexus Weather Update Notification for {{ $weatherData['location'] }}</h1>
    @isset($weatherData['weather']['description'])
        <p><strong>Weather:</strong> {{ $weatherData['weather']['description'] }}</p>
    @endisset
    <p><strong>Temperature:</strong> {{ $weatherData['temperature']['current'] - 273.15 }} °C</p>
    <p><strong>Minimum Temperature:</strong> {{ $weatherData['temperature']['min'] - 273.15 }} °C</p>
    <p><strong>Maximum Temperature:</strong> {{ $weatherData['temperature']['max'] - 273.15 }} °C</p>
    @isset($weatherData['temperature']['feels_like'])
        <p><strong>Feels Like:</strong> {{ $weatherData['temperature']['feels_like'] - 273.15 }} °C</p>
    @endisset
    @isset($weatherData['humidity'])
        <p><strong>Humidity:</strong> {{ $weatherData['humidity'] }}%</p>
    @endisset

    @isset($weatherData['wind']['speed'])
        <p><strong>Wind Speed:</strong> {{ $weatherData['wind']['speed'] }} m/s</p>
    @endisset
    @isset($weatherData['clouds']['all'])
        <p><strong>Cloudiness:</strong> {{ $weatherData['clouds']['all'] }}%</p>
    @endisset

    <p>Stay safe and plan accordingly!</p>
</body>

</html>
