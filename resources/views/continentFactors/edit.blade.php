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
                                    action="/continent_factor/{{ $con_factor->id }}" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="col-12">
                                        <div class="w-100">
                                            <x-form-label for="continent" class="form-label">Continent
                                                Name</x-form-label>
                                            {{-- <label class="form-label">Continent Name</label> --}}
                                            <select id="continent" name="continent_id" type="text" required>
                                                <option label="&nbsp;"></option>
                                                @foreach ($continents as $continent)
                                                    <option value="{{ $continent->id }}"
                                                        {{ $con_factor->continent_id == $continent->id ? 'selected' : '' }}>
                                                        {{ $continent->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <x-form-error name="continent" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="w-100">
                                            <x-form-label for="factor" class="form-label">Factor Name</x-form-label>

                                            {{-- <label class="form-label">Factor Name</label> --}}
                                            <select id="factor" name="factor_id" type="text" required>
                                                <option label="&nbsp;"></option>
                                                @foreach ($factors as $factor)
                                                    <option value="{{ $factor->id }}"
                                                        {{ $con_factor->factor_id == $factor->id ? 'selected' : '' }}>
                                                        {{ $factor->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <x-form-error name="factor_id" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        {{-- <label for="land_soility" class="form-label">title</label> --}}
                                        <x-form-label for="title" class="form-label">Title</x-form-label>
                                        <input class="form-control" id="title" name="title"
                                            value="{{ $con_factor->title }}" type="text" placeholder="title...."
                                            required />
                                        <x-form-error name="title" />
                                    </div>
                                    <div class="col-12">
                                        <label for="descriptions" class="form-label">Descriptions</label>
                                        <textarea rows="4" id="descriptions" class="form-control ckeditor" name="descriptions">{{ $con_factor->descriptions }}</textarea>
                                        <x-form-error name="descriptions" />
                                    </div>

                                    <div class="col-12">
                                        <x-form-label name="image" class="form-label">Image</x-form-label>
                                        <img src="{{ asset($con_factor->image) }}" width="40"
                                            class="img-responsive" />
                                        <input class="form-control" id="image" name="image" type="file"
                                            placeholder="Factors...." />
                                        <x-form-error name="image" />
                                    </div>
                                    <div class="col-12">
                                        {{-- <label for="land_soility" class="form-label">title</label> --}}
                                        <x-form-label for="video_url" class="form-label">Video Url</x-form-label>
                                        <input class="form-control" id="video_url" name="video_url" type="text"
                                            placeholder="Factors...." value="{{ $con_factor->video_url }}" />
                                        <x-form-error name="video_url" />
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Update</button>
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
