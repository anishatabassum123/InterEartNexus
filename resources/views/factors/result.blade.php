<x-layout>

    <div class="container">
        <div class="row mx-6">
            <div class="col">
                <!-- Title Start -->
                
                <!-- Title End -->
                <div class="d-flex">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Continent Name</th>
                                <th scope="col">Factor Name</th>
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

                                        <a href="/continent-factor/{{ $factor->factor->id }}/{{ $factor->continent->code }}"
                                            class="btn btn-light btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>

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
