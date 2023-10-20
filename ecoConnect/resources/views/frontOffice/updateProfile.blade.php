@extends('frontOffice.menu')
@section('profileUpdate')


    <x-app-layout>
        <div class="main-content bg-lightblue  " style=" padding-top: 20px!important;">
            <div class="middle-sidebar-bottom">
                <div class="container">

                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                            <x-section-border />
                        @endif

                </div>
          </div>
        <div>


    </x-app-layout>
    @endsection
