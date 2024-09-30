<x-layout>

    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}" />
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <x-page_title>Factors</x-page_title>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <x-page_heading>
                        Factors Edit
                    </x-page_heading>
                    <!-- Bootstrap Validation Start -->
                    <section class="scroll-section" id="bootstrapValidation">

                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row g-3 needs-validation" method="POST"
                                    action="/factor/{{ $factor->id }}" novalidate>
                                    @method('PATCH')
                                    @csrf
                                    {{-- <div class="col-12">
                                        <div class="w-100">
                                            <label class="form-label">Continent Name</label>
                                            <select id="continent" name="continent" value="{{$factor->continent}}">
                                                <option label="&nbsp;"></option>
                                                @foreach ($continents as $continent)
                                                    <option value="{{ $continent->name }}" {{ $continent->name == $factor->continent ? 'selected' : '' }}>
                                                        {{ $continent->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <x-form-error name="continent" />
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="w-100">
                                            <label class="form-label">Country Name</label>
                                            <select id="country" name="country">
                                                <option label="&nbsp;"></option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->name }}"
                                                        {{ $country->name == $factor->country ? 'selected' : '' }}>
                                                        {{ $country->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="rain_assumption" class="form-label">Rain assumption</label>
                                        <textarea value="" rows="4" type="text" class="form-control ckeditor" name="rain_assumption" required>{{ $factor->rain_assumption }}</textarea>
                                        <x-form-error name="rain_assumption" />
                                    </div>
                                    <div class="col-12">
                                        <label for="land_soility" class="form-label">Land soility</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="land_soility" required>{{ $factor->land_soility }}</textarea>
                                        <x-form-error name="land_soility" />
                                    </div>
                                    <div class="col-12">
                                        <label for="forest_assumption" class="form-label">Forest assumption</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="forest_assumption" required>{{ $factor->forest_assumption }}</textarea>
                                        <x-form-error name="forest_assumption" />
                                    </div>
                                    <div class="col-12">
                                        <label for="temperature" class="form-label">Temperature</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="temperature" required>{{ $factor->temperature }}</textarea>
                                        <x-form-error name="temperature" />
                                    </div>
                                    <div class="col-12">
                                        <label for="perception" class="form-label">Perception</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="perception" required>{{ $factor->perception }}</textarea>
                                        <x-form-error name="perception" />
                                    </div>
                                    <div class="col-12">
                                        <label for="humidity" class="form-label">Humidity</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="humidity" required>{{ $factor->humidity }}</textarea>
                                        <x-form-error name="humidity" />
                                    </div>
                                    <div class="col-12">
                                        <label for="warning_alerts" class="form-label">Warning alerts</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="warning_alerts" required>{{ $factor->warning_alerts }}</textarea>
                                        <x-form-error name="warning_alerts" />
                                    </div>
                                    <div class="col-12">
                                        <label for="wind" class="form-label">wind</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="wind" required>{{ $factor->wind }}</textarea>
                                        <x-form-error name="wind" />
                                    </div>
                                    <div class="col-12">
                                        <label for="air_quality" class="form-label">Air quality</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="air_quality" required>{{ $factor->air_quality }}</textarea>
                                        <x-form-error name="air_quality" />
                                    </div>
                                    <div class="col-12">
                                        <label for="climate_change_note" class="form-label">Climate change
                                            note</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="climate_change_note" required>{{ $factor->climate_change_note }}</textarea>
                                        <x-form-error name="climate_change_note" />
                                    </div>
                                    <div class="col-12">
                                        <label for="co2_assumption" class="form-label">Co2 assumption</label>
                                        <textarea rows="4" type="text" class="form-control ckeditor" name="co2_assumption" required>{{ $factor->co2_assumption }}</textarea>
                                        <x-form-error name="co2_assumption" />
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Bootstrap Validation End -->


                </div>
                <!-- Content End -->
            </div>

        </div>
    </div>
    @section('js_vendor')
        <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
        <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
    @endsection

    @section('js_page')
        <script src="{{ asset('/js/forms/controls.select2.js') }}"></script>
    @endsection


</x-layout>
