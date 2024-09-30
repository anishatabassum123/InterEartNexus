<x-layout>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <x-page_title>Factors</x-page_title>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <x-page_heading>
                        Earth Factor Show
                    </x-page_heading>
                    <!-- Bootstrap Validation Start -->
                    <section class="scroll-section" id="bootstrapValidation">

                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="pt-6">

                                    <x-show-single-data
                                        name="Continent">{{ $factor->continent->name }}</x-show-single-data>
                                    <x-show-single-data
                                        name="Factor Name">{{ $factor->factor->name }}</x-show-single-data>
                                    @if ($factor->title)
                                        <x-show-single-factor name="Title">{{ $factor->title }}</x-show-single-factor>
                                    @endif

                                    @if ($factor->descriptions)
                                        <x-show-single-factor
                                            name="Descriptions">{!! $factor->descriptions !!}</x-show-single-factor>
                                    @endif

                                    @if ($factor->image)
                                        <div class="block my-2 px-4 py-4 border border-gray-250 rounded-lg"><strong>
                                                Image :
                                            </strong><img src="{{ asset($factor->image) }}" alt="Image Description"
                                                class="img-fluid" width="300px">
                                        </div>
                                    @endif
                                    {{-- @if ($factor->video_url)
                                        {{ $factor->video_url }}
                                        <div class="mt-3">
                                            <iframe width="600" height="400" src="{{ $factor->video_url }}"
                                                frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    @endif --}}
                                    @if ($factor->video_url)
                                        <iframe width="560" height="315"
                                            src="{{ str_replace('watch?v=', 'embed/', $factor->video_url) }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    @endif

                                </div>

                                <a href="{{ route('factor.edit', $factor->id) }}"
                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                </a>

                                <form action="{{ route('factor.delete', $factor->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this factor?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </button> --}}
                                    <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1"
                                        onclick="return confirm('Are you sure you want to delete this factor?');"
                                        type="submit">
                                        <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                        <span class="d-none d-xxl-inline-block">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Bootstrap Validation End -->


    </div>
    <!-- Content End -->
    </div>


    </div>
    </div>
</x-layout>
