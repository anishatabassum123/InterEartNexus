<x-layout>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <x-page_title>User</x-page_title>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <x-page_heading>
                        User Show
                    </x-page_heading>
                    <!-- Bootstrap Validation Start -->
                    <section class="scroll-section" id="bootstrapValidation">

                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="pt-6">

                                    <x-show-single-data name="Full Name">{{ $user->full_name }}</x-show-single-data>
                                    <x-show-single-data name="Email">{{ $user->email }}</x-show-single-data>
                                    <x-show-single-data name="Nationality">{{ $user->nationality }}</x-show-single-data>
                                    <x-show-single-data name="School">{{ $user->school }}</x-show-single-data>
                                    <x-show-single-data name="Class">{{ $user->class }}</x-show-single-data>
                                    <x-show-single-data name="Role">{{ $user->role }}</x-show-single-data>
                                    <x-show-single-data name="Active">
                                        @if ($user->active)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </x-show-single-data>
                                </div>

                                <a href="{{ route('user.edit', $user->id) }}"
                                    class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                    <span class="d-none d-xxl-inline-block">Edit</span>
                                </a>
                                @if ($user->active)
                                    <a href="{{ route('user.deactive', $user->id) }}"
                                        class="btn btn-sm btn-icon btn-icon-start btn-outline-warning ms-1"
                                        type="button">
                                        <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                        <span class="d-none d-xxl-inline-block">Deactive</span>
                                    </a>
                                @else
                                    <a href="{{ route('user.active', $user->id) }}"
                                        class="btn btn-sm btn-icon btn-icon-start btn-outline-success ms-1"
                                        type="button">
                                        <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                        <span class="d-none d-xxl-inline-block">Active</span>
                                    </a>
                                @endif


                                <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this user?');">
                                        <i class="fas fa-trash-alt"></i>
                                    </button> --}}
                                    <button class="btn btn-sm btn-icon btn-icon-start btn-outline-danger ms-1"
                                        onclick="return confirm('Are you sure you want to delete this user?');"
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
