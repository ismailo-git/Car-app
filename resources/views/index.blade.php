@extends('layouts.app')

@section('content')
    {{-- <div class="flex justify-center">
        <div class="w-10/12 bg-white text-white p-6 flex justify-between items-center">
            <div class="flex-col">
            <h2 class="text-4xl text-gray-700 w-2/3">Vous voulez vendre voiture ? c'est ici que ça se passe.</h2>
            <p class="text-xl text-gray-900 mt-4 w-2/3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <a href="{{ route('cars') }}" class="text-center bg-green-500 text-white py-4 px-4 font-semibold uppercase block w-1/2 mt-5">Déposer une voiture</a>
            </div>
            <img src="images/banner.jpg" class="rounded">            
        </div>
    </div> --}}

    <div class="container mx-auto">
        <div class="h-screen flex justify-between items-center">

            <div class="flex-1">
                 <h2 class="text-4xl text-gray-700">Vous voulez vendre voiture ? c'est ici que ça se passe.</h2>
                 <p class="text-xl text-gray-900 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                 <a href="{{ route('cars') }}" class="text-center bg-green-500 text-white py-4 px-4 font-semibold uppercase block mt-5">Déposer une voiture</a>
            </div>
            <div class="flex-1">
                 <img src="images/banner.jpg" class="rounded">
            </div>
        
        </div>
    </div>
@endsection