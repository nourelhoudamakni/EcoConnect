@extends('frontOffice.menu')
@section('settingsProfile')

<x-app-layout>
    <div class="main-content bg-lightblue  " style=" padding-top: 10px!important;">
        <div class="middle-sidebar-bottom">
            <div class="container">

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>


            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())


                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
            </div>
        </div>
    </div>

</x-app-layout>
@endsection
