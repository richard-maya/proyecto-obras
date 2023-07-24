{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <x-h1_title>SELECCIONAR EMPRESA</x-h1_title>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 g-lg-5">
        <x-dash.card logo="img/Logos_Cintegran.png" ruta="empresa"/>
        <x-dash.card logo="img/Logos_ConstructoraBalbek.png" ruta="empresa"/>
        <x-dash.card logo="img/Logos_Inatek.png" ruta="empresa"/>
    </div>
</div>
@endsection