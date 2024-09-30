<x-layout>


    <main>
        <div class="mx-auto container mt-7">
            <div class="row align-items-center">
                <div class="col col-xl-3 col-lg-3 col-md-4 col-12 mt-5">

                    <div class="map-left-image-block style1">
                        <a href="#"><img class="d-block img-fluid" src="{{ asset('img/continent/01.png') }}"
                                alt="" /></a>
                    </div>
                    <div class="map-left-image-block style1">
                        <a href="#"><img class="d-block img-fluid" src="{{ asset('img/continent/01.png') }}"
                                alt="" /></a>
                    </div>
                    <div class="map-left-image-block style1">
                        <a href="#"><img class="d-block img-fluid" src="{{ asset('img/continent/01.png') }}"
                                alt="" /></a>
                    </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-4 col-12">
                    <div class="map-center-image">
                        <img class="d-block img-fluid" src="{{ asset('img/continent/asia.png') }}" alt="" />
                    </div>
                </div>
                <div class="col col-xl-3 col-lg-3 col-md-4 col-12">
                    <x-factor-list :continent="$continent" />
                </div>
            </div>
        </div>
    </main>
</x-layout>
