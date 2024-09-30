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
                        User Edit
                    </x-page_heading>
                    <!-- Bootstrap Validation Start -->
                    <section class="scroll-section" id="bootstrapValidation">

                        <div class="card mb-5">
                            <div class="card-body">
                                <form class="row g-3 needs-validation" method="POST" action="/user/{{ $user->id }}"
                                    novalidate>
                                    @csrf
                                    @method('PATCH')
                                    <div class="col-md-4">
                                        <label for="full_name" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                            value="{{ $user->full_name }}" required />
                                        <x-form-error name="full_name" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $user->email }}" required />
                                        <x-form-error name="email" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="nationality" class="form-label">nationality</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality"
                                            value="{{ $user->nationality }}" required />
                                        <x-form-error name="nationality" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="city" class="form-label">city</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            value="{{ $user->city }}" required />
                                        <x-form-error name="city" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="school" class="form-label">school</label>
                                        <input type="text" class="form-control" id="school" name="school"
                                            value="{{ $user->school }}" required />
                                        <x-form-error name="school" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="class" class="form-label">class</label>
                                        <input type="text" class="form-control" id="class" name="class"
                                            value="{{ $user->class }}" required />
                                        <x-form-error name="class" />

                                    </div>
                                    {{-- @can('update-post', $user) --}}
                                    <div class="col-md-4">
                                        <label for="role" class="form-label">role</label>
                                        <input type="text" class="form-control" id="role" name="role"
                                            value="{{ $user->role }}" required />
                                        <x-form-error name="role" />
                                    </div>
                                    {{-- @endcan --}}
                                    <div class="col-md-4">
                                        <label for="active" class="form-label">active</label>
                                        <input type="text" class="form-control" id="active" name="active"
                                            value="{{ $user->active }}" required />
                                        <x-form-error name="active" />
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
</x-layout>
