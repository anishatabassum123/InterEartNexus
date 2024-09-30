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
                        Factors Create
                    </x-page_heading>
                    <!-- Bootstrap Validation Start -->
                    <section class="scroll-section" id="bootstrapValidation">

                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row g-3 needs-validation" method="POST" action="/continent_factor"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <div class="w-100">
                                            <x-form-label for="continent" class="form-label">Continent
                                                Name<span class="text-danger">*</span></x-form-label>
                                            <select id="continent" name="continent_id" type="text" required>
                                                <option label="&nbsp;"></option>
                                                @foreach ($continents as $continent)
                                                    <option value="{{ $continent->id }}">{{ $continent->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <x-form-error name="continent_id" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="w-100">
                                            <x-form-label for="factor" class="form-label">Factor Name<span
                                                    class="text-danger">*</span></x-form-label>
                                            <select id="factor" name="factor_id" type="text" required>
                                                <option label="&nbsp;"></option>
                                                @foreach ($factors as $factor)
                                                    <option value="{{ $factor->id }}">{{ $factor->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <x-form-error name="factor_id" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <x-form-label for="title" class="form-label">Title<span
                                                class="text-danger">*</span></x-form-label>
                                        <input class="form-control" id="title" name="title" type="text"
                                            placeholder="title...." required />
                                        <x-form-error name="title" />
                                    </div>
                                    <div class="col-12">
                                        <label for="descriptions" class="form-label">Descriptions<span
                                                class="text-danger">*</span></label>
                                        <textarea rows="4" id="descriptions" class="form-control ckeditor" name="descriptions"></textarea>
                                        <x-form-error name="descriptions" />
                                    </div>

                                    <div class="col-12">
                                        <x-form-label name="image" class="form-label">Image</x-form-label>
                                        <input class="form-control" id="image" name="image" type="file"
                                            placeholder="Factors...." />
                                        <x-form-error name="image" />
                                    </div>
                                    <div class="col-12">
                                        {{-- <label for="land_soility" class="form-label">title</label> --}}
                                        <x-form-label for="video_url" class="form-label">Video Url</x-form-label>
                                        <input class="form-control" id="video_url" name="video_url" type="text"
                                            placeholder="Factors...." />
                                        <x-form-error name="video_url" />
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Bootstrap Validation End -->

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            CKEDITOR.replace('description');
                        });
                    </script>
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
