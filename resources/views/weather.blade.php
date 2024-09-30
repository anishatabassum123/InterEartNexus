<x-layout>
    <div class="container text-center">
        <h1><strong>Weather Report for {{ $weatherData['location'] }}</strong></h1>
        @isset($weatherData['weather']['description'])
            <h3p><strong>Weather:</strong> {{ $weatherData['weather']['description'] }}</h3p>
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
    </div>
</x-layout>
