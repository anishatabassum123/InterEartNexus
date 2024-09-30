<x-layout>
    <div class="container">
        <div class="row mx-6">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container d-flex justify-content-between align-items-center">
                        <h1 class="mb-0 pb-0 display-4">Factor list</h1>
                        <x-button href="/factor/create" type="button">Add factor+</x-button>
                    </div>
                </section>
                <form action="{{ route('users.search') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search users..."
                            value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <!-- Title End -->
                <div class="d-flex">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Continent Name</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">Rain Assumption</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($factors as $key => $factor)
                                <tr class="fixed-size-row">
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $factor->continent }}</td>
                                    <td>{{ $factor->country }}</td>
                                    <td>{!! $factor->rain_assumption !!}</td>

                                    <td>
                                        <a href="/factor/{{ $factor->id }}/edit" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="/factor/{{ $factor->id }}" class="btn btn-light btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="/factor/{{ $factor->id }}" method="POST"
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
                    {!! $factors->onEachSide(0)->links() !!}
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
