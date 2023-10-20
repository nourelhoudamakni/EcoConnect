<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elomoas - Online Course and LMS HTML Template</title>
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/feather.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/assetsFront/css/style.css') }}">
</head>

<body class="color-theme-blue">

    <div class="preloader"></div>

    <div class="main-wrap">

        <div class="nav-header bg-transparent shadow-none border-0">
            <div class="nav-top w-100">
                <a href="index.html"><i class="feather-zap text-success display1-size me-2 ms-0"></i><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">Sociala. </span> </a>
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <button class="nav-menu me-0 ms-2"></button>

                <a href="#" class="header-btn d-none d-lg-block bg-dark fw-500 text-white font-xsss p-3 ms-auto w100 text-center lh-20 rounded-xl"  data-bs-toggle="modal" data-bs-target="#Modallogin">Login</a>
                <a href="#" class="header-btn d-none d-lg-block bg-current fw-500 text-white font-xsss p-3 ms-2 w100 text-center lh-20 rounded-xl"  data-bs-toggle="modal" data-bs-target="#Modalregister">Register</a>

            </div>


        </div>

        <div class="row">
            <div class="col-xl-6 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url('{{ asset('imagesTemplate/login-bg.jpg') }}');"></div>
            <div class="col-xl-6 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
                <div class="card shadow-none border-0 ms-auto me-auto login-card">
                    <div class="card-body rounded-0 text-left">

                        <x-guest-layout>
                            <x-authentication-card>
                                <x-slot name="logo">
                                    {{-- <x-authentication-card-logo /> --}}
                                </x-slot>
                                <h2 class="fw-700 display1-size display2-md-size mb-4">Create <br>your account</h2>
                                <x-validation-errors class="mb-4" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf


                                    <div>
                                        <x-label for="lastName" value="{{ __('lastName') }}"  class="mont-font fw-600 font-xsss"/>
                                        <x-input id="lastName" class="block mt-1 w-full form-control" type="text" name="lastName" :value="old('lastName')"
                                            required autofocus autocomplete="lastName" />
                                    </div>
                                    <div>
                                        <x-label for="firstName" value="{{ __('firstName') }}"  class="mont-font fw-600 font-xsss" />
                                        <x-input id="firstName" class="block mt-1 w-full form-control" type="text" name="firstName" :value="old('firstName')" required
                                            autofocus autocomplete="firstName" />
                                    </div>
                                    <div>
                                        <x-label for="username" value="{{ __('Username') }}"  class="mont-font fw-600 font-xsss"/>
                                        <x-input id="username" class="block mt-1 w-full form-control" type="text" name="username" :value="old('username')"
                                            required />
                                    </div>
                                    <div class="mt-4">
                                        <x-label for="email" value="{{ __('Email') }}"  class="mont-font fw-600 font-xsss"/>
                                        <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"
                                            required autocomplete="username" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="password" value="{{ __('Password') }}"  class="mont-font fw-600 font-xsss"/>
                                        <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                                            autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="mont-font fw-600 font-xsss" />
                                        <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="phone" value="{{ __('Phone Number') }}"  class="mont-font fw-600 font-xsss"/>
                                        <x-input id="phone" class="block mt-1 w-full form-control" type="text" name="phone" :value="old('phone')"
                                            required />
                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-label for="terms">
                                                <div class="flex items-center">
                                                    <x-checkbox name="terms" id="terms" required />

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' =>
                                                                '<a target="_blank" href="' .
                                                                route('terms.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Terms of Service') .
                                                                '</a>',
                                                            'privacy_policy' =>
                                                                '<a target="_blank" href="' .
                                                                route('policy.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Privacy Policy') .
                                                                '</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-label>
                                        </div>
                                    @endif

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-button>
                                    </div>
                                </form>
                            </x-authentication-card>
                        </x-guest-layout>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ Vite::asset('resources/assetsFront/js/plugin.js') }}"></script>
    <script src="{{ Vite::asset('resources/assetsFront/js/scripts.js') }}"></script>
</body>

</html>


