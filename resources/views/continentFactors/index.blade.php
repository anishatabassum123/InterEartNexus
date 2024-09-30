<x-layout>
    <div class="container">
        <div class="row mx-6">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container d-flex justify-content-between align-items-center">
                        <h1 class="mb-0 pb-0 display-4">Continent Factor list</h1>
                        <x-button href="/continent_factor/create" type="button">Continent factor+</x-button>
                    </div>
                </section>


                <!-- Title End -->
                <div class="d-flex">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Continent Name</th>
                                <th scope="col">Factor name</th>
                                <th scope="col">Title</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($factors as $key => $factor)
                                <tr class="fixed-size-row">
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $factor->continent->name }}</td>
                                    <td>{{ $factor->factor->name }}</td>
                                    <td>{{ $factor->title }}</td>

                                    <td>
                                        <a href="/continent_factor/{{ $factor->id }}/edit"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="/continent_factor/{{ $factor->id }}" class="btn btn-light btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="/continent_factor/{{ $factor->id }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this factor?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
                <div class="d-flex">
                    {{ $factors->onEachSide(0)->links() }}
                </div>
                <style>
                    .fixed-size-row {
                        max-width: 100px;
                        max-height: 100px;
                        overflow: hidden;
                        /* Ensures content that exceeds the size is hidden */
                    }

                    .fixed-size-row td {
                        max-width: 100px;
                        max-height: 100px;
                        overflow: hidden;
                    }
                </style>
            </div>
        </div>

</x-layout>
