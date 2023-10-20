@extends('frontOffice.menu')
@section('updatePassword')

<x-app-layout>
    <div class="main-content bg-lightblue  " style=" padding-top: 20px!important;">
        <div class="middle-sidebar-bottom">
            <div class="container">

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                @endif

            </div>
        </div>
    </div>

</x-app-layout>
@endsection
