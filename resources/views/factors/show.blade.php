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

                                    <x-show-single-data name="Continent">{{ $factor->continent }}</x-show-single-data>
                                    <x-show-single-data name="Country">{{ $factor->country }}</x-show-single-data>
                                    @if ($factor->rain_assumption)
                                        <x-show-single-factor
                                            name="Rain Assumption">{!! $factor->rain_assumption !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->land_soility)
                                        <x-show-single-factor
                                            name="Land Solidity">{!! $factor->land_soility !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->forest_assumption)
                                        <x-show-single-factor
                                            name="Forest Assumption">{!! $factor->forest_assumption !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->temperature)
                                        <x-show-single-factor
                                            name="Temperature">{!! $factor->temperature !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->perception)
                                        <x-show-single-factor
                                            name="Perception">{!! $factor->perception !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->humidity)
                                        <x-show-single-factor
                                            name="Humidity">{!! $factor->humidity !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->warning_alerts)
                                        <x-show-single-factor
                                            name="Warning Alerts">{!! $factor->warning_alerts !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->wind)
                                        <x-show-single-factor
                                            name="Wind">{!! $factor->wind !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->air_quality)
                                        <x-show-single-factor
                                            name="Air Quality">{!! $factor->air_quality !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->climate_change_note)
                                        <x-show-single-factor
                                            name="Climate Change Note">{!! $factor->climate_change_note !!}</x-show-single-factor>
                                    @endif
                                    @if ($factor->co2_assumption)
                                        <x-show-single-factor
                                            name="Co2 Assumption">{!! $factor->co2_assumption !!}</x-show-single-factor>
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
