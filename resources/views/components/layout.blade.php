<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Inter Earth Nexus </title>
    <meta name="description" content="" />
    @vite(['resources/js/app.js'])
    <x-head />
</head>

<body class="index">
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <x-nav />
        </div>
        <main>
            <div class="mx-auto container px-4 py-3 px-sm-3 px-lg-4">
                {{ $slot }}
            </div>
        </main>
        <x-footer />
    </div>
    {{-- <x-modal-settings /> --}}
    {{-- <x-modal-search /> --}}
    <x-scripts />
</body>

</html>
