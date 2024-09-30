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
                <h2 class="cta-1 mb-0 text-primary">Forgot Password</h2>
            </div>

            @if (Session::has('message'))
                <div class="alert alert-success" role="alert">

                    {{ Session::get('message') }}

                </div>
            @endif
            <div>
                <form method="POST" action="/forgot-password">
                    @csrf
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-acorn-icon="email"></i>
                        <input class="form-control" placeholder="Email" type="email" name="email" required />
                        <x-form-error name="email" />
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="btn btn-lg btn-primary">send reset password link</button>
                </form>
            </div>
        </div>
    </div>
@endsection
