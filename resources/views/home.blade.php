<x-layout>

    <link href="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
        type="text/css" />
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
                <div id="map" class="mapboxgl-map">
                    <div class="mapboxgl-canary" style="visibility: hidden"></div>
                    <div
                        class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate">
                        <canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" role="region" width="1350"
                            height="870" style="width: 1079.2px; height: 695.2px"></canvas>
                    </div>
                    <div class="mapboxgl-control-container">
                        <div class="mapboxgl-ctrl-top-left"></div>
                        <div class="mapboxgl-ctrl-top-right">
                            <div class="mapboxgl-ctrl mapboxgl-ctrl-group">
                                <button class="mapboxgl-ctrl-zoom-in" type="button" aria-label="Zoom in"
                                    aria-disabled="false">
                                    <span class="mapboxgl-ctrl-icon" aria-hidden="true"
                                        title="Zoom in"></span></button><button class="mapboxgl-ctrl-zoom-out"
                                    type="button" aria-label="Zoom out" aria-disabled="false">
                                    <span class="mapboxgl-ctrl-icon" aria-hidden="true"
                                        title="Zoom out"></span></button><button class="mapboxgl-ctrl-compass"
                                    type="button" aria-label="Reset bearing to north">
                                    <span class="mapboxgl-ctrl-icon" aria-hidden="true" title="Reset bearing to north"
                                        style="transform: rotate(0deg)"></span>
                                </button>
                            </div>
                        </div>
                        <div class="mapboxgl-ctrl-bottom-left">
                            <div class="mapboxgl-ctrl" style="display: block">
                                <a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow"
                                    href="https://www.mapbox.com/" aria-label="Mapbox homepage"></a>
                            </div>
                        </div>
                        <div class="mapboxgl-ctrl-bottom-right">
                            <div class="mapboxgl-ctrl mapboxgl-ctrl-attrib">
                                <button class="mapboxgl-ctrl-attrib-button" type="button"
                                    aria-label="Toggle attribution">
                                    <span class="mapboxgl-ctrl-icon" aria-hidden="true"
                                        title="Toggle attribution"></span>
                                </button>
                                <div class="mapboxgl-ctrl-attrib-inner">
                                    <a href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox"
                                        aria-label="Mapbox">© Mapbox</a>
                                    <a href="https://www.openstreetmap.org/about/" target="_blank" title="OpenStreetMap"
                                        aria-label="OpenStreetMap">© OpenStreetMap</a>
                                    <a class="mapbox-improve-map"
                                        href="https://apps.mapbox.com/feedback/?owner=mapbox&amp;id=streets-v9&amp;access_token=pk.eyJ1Ijoic3ljb3JheCIsImEiOiJjaXpwMDBuM2cwMDZzMzNrMWc0bWx0bGU2In0.Bqn44KUoFtynMw9vOQXd2w#/100/60/2"
                                        target="_blank" title="Improve this map" aria-label="Improve this map"
                                        rel="noopener nofollow">Improve this map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                <div class="sidebar-content">
                    <div class="country-list mb-30">
                        <p class="about-dis">
                            These continents work together to provide essential resources such as food production
                            agricultural lands (Asia), mineral reserves (Africa), technological advancements (North
                            America), medicinal plants (South America) biodiversity conservation areas (Australia)
                            scientific research on climate change (Antarctica) etc., supporting mankind in various ways
                            contributing towards their overall development needs across different fields like economics
                            science technology medicine etc..
                        </p>
                        <ul>
                            <li>
                                <a href="/continent/as">Asia
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="/continent/af">Africa
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="/continent/na">North America
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="/continent/sa">South America
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="/continent/an">Antarctica
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="/continent/eu">Europe
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="/continent/au">Australia
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-toggle"></div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        #map {
            width: 100vw;
            /* Full width of the viewport */
            height: 100vh;
            /* Full height of the viewport */
            margin: 0;
            /* Remove any margins */
        }
    </style>
    <script>
        // TO MAKE THE MAP APPEAR YOU MUST
        // ADD YOUR ACCESS TOKEN FROM
        // https://account.mapbox.com
        mapboxgl.accessToken =
            "pk.eyJ1Ijoic3ljb3JheCIsImEiOiJjaXpwMDBuM2cwMDZzMzNrMWc0bWx0bGU2In0.Bqn44KUoFtynMw9vOQXd2w";
        const map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/streets-v9",
            projection: "globe", // Display the map as a globe, since satellite-v9 defaults to Mercator
            zoom: 1,
            center: [30, 15],
        });

        map.addControl(new mapboxgl.NavigationControl());
        map.scrollZoom.disable();

        map.on("style.load", () => {
            map.setFog({}); // Set the default atmosphere style
        });

        // The following values can be changed to control rotation speed:

        // At low zooms, complete a revolution every two minutes.
        const secondsPerRevolution = 60;
        // Above zoom level 5, do not rotate.
        const maxSpinZoom = 5;
        // Rotate at intermediate speeds between zoom levels 3 and 5.
        const slowSpinZoom = 3;

        const continents = [{
                name: "Africa",
                coords: [21.0936, 7.1881],
                route: "/continent/af"
            },
            {
                name: "Asia",
                coords: [104.1954, 35.8617],
                route: "/continent/as"
            },
            {
                name: "Europe",
                coords: [10.4515, 51.1657],
                route: "/continent/eu"
            },
            {
                name: "North America",
                coords: [-99.1332, 19.4326],
                route: "/continent/na"
            },
            {
                name: "South America",
                coords: [-58.3816, -34.6037],
                route: "/continent/sa"
            },
            {
                name: "Australia",
                coords: [133.7751, -25.2744],
                route: "/continent/au"
            },
            {
                name: "Antarctica",
                coords: [0.0, -75.2509],
                route: "/continent/an"
            },
        ];

        continents.forEach((continent) => {
            // Create a marker
            const marker = new mapboxgl.Marker()
                .setLngLat(continent.coords)
                .addTo(map);

            // Create a popup with a clickable link
            const popup = new mapboxgl.Popup({
                offset: 25
            }).setHTML(
                `<a href="${continent.route}">${continent.name}</a>`
            );

            // Add click event to the marker to show the popup
            marker.getElement().addEventListener('click', () => {
                popup.addTo(map);
                marker.setPopup(popup).togglePopup(); // Show the popup on click
            });
        });


        let userInteracting = false;
        const spinEnabled = true;

        function spinGlobe() {
            const zoom = map.getZoom();
            if (spinEnabled && !userInteracting && zoom < maxSpinZoom) {
                let distancePerSecond = 360 / secondsPerRevolution;
                if (zoom > slowSpinZoom) {
                    // Slow spinning at higher zooms
                    const zoomDif = (maxSpinZoom - zoom) / (maxSpinZoom - slowSpinZoom);
                    distancePerSecond *= zoomDif;
                }
                const center = map.getCenter();
                center.lng -= distancePerSecond;
                // Smoothly animate the map over one second.
                // When this animation is complete, it calls a 'moveend' event.
                map.easeTo({
                    center,
                    duration: 1000,
                    easing: (n) => n
                });
            }
        }

        // Pause spinning on interaction
        map.on("mousedown", () => {
            userInteracting = true;
        });
        map.on("dragstart", () => {
            userInteracting = true;
        });

        // When animation is complete, start spinning if there is no ongoing interaction
        map.on("moveend", () => {
            spinGlobe();
        });

        spinGlobe();

        // Add click event listener to show continent name and center map on continent
        map.on("click", (e) => {
            const coords = e.lngLat;
            const url =
                `https://api.mapbox.com/geocoding/v5/mapbox.places/${coords.lng},${coords.lat}.json?access_token=${mapboxgl.accessToken}`;

            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    const features = data.features;
                    let countryName = "Unknown";
                    for (const feature of features) {
                        if (feature.place_type.includes("country")) {
                            countryName = feature.text;
                            break;
                        }
                    }

                    // Center the map on the continent
                    let continentCenter;
                    switch (getContinent(countryName)) {
                        case "Africa":
                            continentCenter = [20, 10];
                            break;
                        case "Asia":
                            continentCenter = [100, 60];
                            break;
                        case "Europe":
                            continentCenter = [10, 50];
                            break;
                        case "North America":
                            continentCenter = [-100, 40];
                            break;
                        case "South America":
                            continentCenter = [-60, -15];
                            break;
                        case "Australia":
                            continentCenter = [133, -25];
                            break;
                        case "Antarctica":
                            continentCenter = [0, -75];
                            break;
                        default:
                            continentCenter = [30, 15]; // Default center if continent is unknown
                    }

                    map.flyTo({
                        center: continentCenter,
                        zoom: 2,
                        essential: true, // this animation is considered essential with respect to prefers-reduced-motion
                    });

                    const popup = new mapboxgl.Popup()
                        .setLngLat(coords)
                        .setHTML(`<h3>Hello!</h3><p>You clicked on: ${continent}</p>`)
                        .addTo(map);
                })
                .catch((error) => {
                    console.error("Error fetching continent data:", error);
                });



        });
        // GeoJSON data representing the boundary of each continent
        const continentPolygons = {
            type: "FeatureCollection",
            features: [{
                    type: "Feature",
                    properties: {
                        name: "Africa"
                    },
                    geometry: {
                        type: "Polygon",
                        coordinates: [
                            // Coordinates defining Africa's polygon (simplified for the example)
                            [
                                [-17.625, 37.218],
                                [51.5, 37.218],
                                [51.5, -35.0],
                                [-17.625, -35.0],
                                [-17.625, 37.218]
                            ]
                        ]
                    }
                },
                {
                    type: "Feature",
                    properties: {
                        name: "Asia"
                    },
                    geometry: {
                        type: "Polygon",
                        coordinates: [
                            // Coordinates defining Asia's polygon (simplified for the example)
                            [
                                [26.0, 81.0],
                                [169.0, 81.0],
                                [169.0, -10.0],
                                [26.0, -10.0],
                                [26.0, 81.0]
                            ]
                        ]
                    }
                },
                // Repeat for other continents...
            ]
        };

        // Add continent polygons to the map as a new layer
        map.on('load', () => {
            map.addSource('continents', {
                type: 'geojson',
                data: continentPolygons
            });

            map.addLayer({
                id: 'continent-layer',
                type: 'fill',
                source: 'continents',
                paint: {
                    'fill-color': '#888888',
                    'fill-opacity': 0.4
                }
            });

            // Loop through the continent markers
            continents.forEach((continent) => {
                const marker = new mapboxgl.Marker()
                    .setLngLat(continent.coords)
                    .addTo(map);

                const popup = new mapboxgl.Popup({
                    offset: 25
                }).setHTML(
                    `<a href="${continent.route}">${continent.name}</a>`
                );

                marker.getElement().addEventListener('click', () => {
                    popup.addTo(map);
                    marker.setPopup(popup).togglePopup();
                });

                // Highlight the continent polygon on hover
                marker.getElement().addEventListener('mouseenter', () => {
                    map.setPaintProperty('continent-layer', 'fill-color', [
                        'match',
                        ['get', 'name'],
                        continent.name,
                        '#ff0000', // Highlight color for the hovered continent
                        '#888888' // Default color for other continents
                    ]);
                });

                marker.getElement().addEventListener('mouseleave', () => {
                    // Reset the color when not hovering
                    map.setPaintProperty('continent-layer', 'fill-color', '#888888');
                });
            });
        });
    </script>
</x-layout>
