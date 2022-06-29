@extends('template.users')

@section('title', 'Painel Admin')

@section('content')

<div class="m-48">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{url('/storage/dashborad.jpg')}}" alt="Dashboard">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Bem vindo {{ Auth::user()->name }}</div>
        <p class="text-gray-700 text-base">
            Dashboard Laravel-9  do curso da Be Academy
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#paylivre</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#be.academy</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#laravel</span>
    </div>
    </div>
</div>


@endsection