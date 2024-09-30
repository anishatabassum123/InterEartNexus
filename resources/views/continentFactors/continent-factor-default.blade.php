<x-layout>
    <main class="">
        <div class="mx-auto container">
            <div class="portfolio-detalis-top-image home-main-contant-style-2">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12">
                        <h3 class="portfolio-detalis-title">{{ $continent->name }} :
                            {{ $continent_factor->factor->name }}</h3>
                        <div class="big-image mb-30">
                            @isset($continent_factor->image)
                                <img class="d-block img-fluid" src="{{ asset($continent_factor->image) }}" alt="big image" />
                            @else
                                <img class="d-block img-fluid" src="{{ asset('/img/continent/asia_rain_consumption.png') }}"
                                    alt="big image" />
                            @endisset

                        </div>
                        <h3 class="portfolio-detalis-title">{{ $continent_factor->title }}
                        </h3>
                        @isset($continent_factor->descriptions)
                            <div class="portfolio-detalis-text">
                                <p>{!! $continent_factor->descriptions !!}</p>


                                {{-- <p>
                                In 2024, the assumption for Asian rain patterns is that there will be continued
                                variability and unpredictability due to climate change. While some regions may
                                experience increased rainfall and the risk of flooding, others may face prolonged
                                periods of drought.
                            </p>
                            <p>

                                The monsoon season in South and Southeast Asia is expected to bring heavy rains and
                                potential flooding in low-lying areas. This could lead to infrastructure damage,
                                displacement of communities, and disruptions to agriculture.
                            </p> --}}
                            </div>
                        @endisset

                        <!-- ============= START VIDEO BLOCK ============= -->
                        @isset($continent_factor->video_url)
                            <section class="video-block p-relative portfolio-detalis-text bg-style2">
                                <div class="container">
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12">
                                            <!-- ============= START VIDEO BLOCK ============= -->
                                            <div class="about-video-scetion">
                                                <div class="about-video-block">
                                                    <div class="about-video-block-style">
                                                        <div class="watch-video text-center">
                                                            <a href="{{ $continent_factor->video_url }}"
                                                                class="video-link btn-video">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 384 512">
                                                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                    <path
                                                                        d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ============= END VIDEO BLOCK ============= -->
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12">
                                            <img class="d-block img-fluid" src="{{ asset('/img/continent/big-2.png') }}"
                                                alt="big image" />
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endisset


                        <!-- ============= END BANNER BLOCK ============= -->
                        {{--
                        <div class="service-small-image">
                            <div class="row">
                                <div class="col-md-6">

                                    @isset($continent_factor->image)
                                        <img class="d-block img-fluid" src="{{ asset($continent_factor->image) }}"
                                            alt="big image" />
                                    @else
                                        <img class="d-block img-fluid"
                                            src="{{ asset('/img/continent/asia_rain_consumption.png') }}" alt="big image" />
                                    @endisset
                                </div>
                                <div class="col-md-6">
                                    @isset($continent_factor->image)
                                        <img class="d-block img-fluid" src="{{ asset($continent_factor->image) }}"
                                            alt="big image" />
                                    @else
                                        <img class="d-block img-fluid"
                                            src="{{ asset('/img/continent/asia_rain_consumption.png') }}"
                                            alt="big image" />
                                    @endisset
                                </div>
                            </div>
                        </div> --}}

                    </div>

                    <aside class="col-xl-3 col-lg-3 col-md-5 col-sm-12">
                        <x-factor-list :continent="$continent" />
                        {{-- <div class="sidebar-content side-style-2 mb-30">
                            <div class="country-list mb-30">
                                <h2 class="country-list-title">Factor List</h2>
                                <ul>
                                    @foreach ($continent->factors as $factor)
                                        <h1>{{ $factor->name }}</h1>
                                    @endforeach
                                    <li>
                                        <a href="#">Rain assumption
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Land soility
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Forest assumption
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Temperature
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Perception
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Humidity
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Warning alerts
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Wind
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Air quality
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Climate change note
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                    <li>
                                        <a href="#">Co2 assumption
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                            </svg></a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <div class="sidebar-content side-style-2 mb-30">
                            <div class="country-list">
                                <h2 class="country-list-title">Continent List</h2>
                                <ul>
                                    @foreach ($continents as $continent)
                                        {{-- <h1>{{ $continent->name }}</h1> --}}
                                        <li>
                                            <a href="/continent/{{ $continent->code }}">{{ $continent->name }}
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                                </svg></a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
</x-layout>
