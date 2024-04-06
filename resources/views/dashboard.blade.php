@extends('layouts.app')

@section('title')
    Tu Perfil
@endsection


@section('content')
    <h2 class="font-extrabold text-3xl text-center">
        Perfil
    </h2>
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                1
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p> {{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
