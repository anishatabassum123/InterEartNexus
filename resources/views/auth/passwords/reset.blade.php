@php
    $title = 'Login Page';
    $description = 'Login Page';
@endphp
@extends('layout_full', ['title' => $title, 'description' => $description])
@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/auth.register.js') }}"></script>
@endsection

@section('content_left')
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <img src="{{ asset('/img/logo/logo.png') }}" alt="logo" style="width:200%" />
            </div>
        </div>
    </div>
@endsection

@section('content_right')
    <div
        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                {{-- <a href="#">
                    <div class="logo-default"></div>
                </a> --}}
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Reset Password</h2>
                {{-- <h2 class="cta-1 text-primary">Interearthnexus.com</h2> --}}
            </div>
            {{-- <div class="mb-5">
                <p class="h6">Please use the form to register.</p>
                <p class="h6">
                    If you are a member, please
                    <a href="/register">Register</a>
                    .
                </p>
            </div> --}}
            <div>
                <form method="POST" action="/reset-password">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <span class="text-danger">*</span>
                        <input class="form-control" placeholder="Email" name="email" required />
                        <x-form-error name="email" />
                    </div>

                    <div class="mb-3 filled form-group tooltip-end-top">
                        <span class="text-danger">*</span>
                        <input class="form-control pe-7" name="password" type="password" placeholder="Password" required />
                        <a class="text-small position-absolute t-3 e-3" href="/forgot-password">Forgot?</a>
                        <x-form-error name="password" />
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <span class="text-danger">*</span>
                        <input class="form-control" name="password_confirmation" type="password"
                            placeholder="Confirm Password" required />
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Update Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
