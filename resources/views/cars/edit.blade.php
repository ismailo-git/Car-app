@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-8 rounded m-4">
            <h2 class="text-xl text-gray-900 text-center mb-8">Modifier votre annonce</h2>
           
            @if ($errors->any())
                <div class="w-full m-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="w-full mb-4 text-white bg-red-500 p-4 rounded">
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/cars/edit" method="POST" class="w-full px-4 space-y-2 sm:px-10 sm:space-y-8" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Titre de l'annonce:
                        </label>

                        <input id="title" type="text" class="form-input w-full @error('title')  border-red-500 @enderror"
                            name="title" autocomplete="marque" autofocus value="{{$car->title}}">

                        @error('title')
                        <p class="text-red-500 text-base  mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                <div class="flex flex-wrap">
                        <label for="marque" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Marque:
                        </label>

                        <input id="marque" type="text" class="form-input w-full @error('marque')  border-red-500 @enderror"
                            name="marque" autocomplete="marque" autofocus value="{{$car->marque}}">

                        @error('marque')
                        <p class="text-red-500 text-base  mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="modele" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Mod??le:
                        </label>

                        <input id="modele" type="text"
                            class="form-input w-full @error('modele') border-red-500 @enderror" name="modele" autocomplete="modele" autofocus value="{{$car->modele}}">

                        @error('modele')
                        <p class="text-red-500 text-base mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="carburant" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Carburant:
                        </label>

                        <input id="carburant" type="text"
                            class="form-input w-full @error('carburant') border-red-500 @enderror" name="carburant"
                            autocomplete="carburant" value="{{$car->carburant}}">

                        @error('carburant')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="boite" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Bo??te de vitesse:
                        </label>

                        <input id="boite" type="text" class="form-input w-full"
                            name="boite" autocomplete="boite" value="{{$car->boite}}">

                        @error('boite')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="kilometrage" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Kilometrage:
                        </label>

                        <input id="kilometrage" type="text" class="form-input w-full"
                            name="kilometrage" autocomplete="kilometrage" value="{{$car->kilometrage}}">
                            @error('kilometrage')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="price" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Prix:
                        </label>

                        <input id="price" type="text" class="form-input w-full"
                            name="price" autocomplete="price" value="{{$car->price}}">
                            @error('price')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="year" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Ann??e:
                        </label>

                        <input id="year" type="text" class="form-input w-full"
                            name="year" autocomplete="year" value="{{$car->year}}">
                            @error('year')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            Description:
                        </label>
                        <textarea name="description" id="description" cols="30" rows="14"  class="w-full border block text-gray-900 p-4 text-sm font-bold sm:mb-4 resize-none">
                        {{$car->description}}
                        </textarea>
                         @error('description')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    </div>

                    <label
                        class="w-64 flex flex-col items-center px-4 py-6 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-indigo-600 hover:text-white text-red-600 ease-linear transition-all duration-150">
                        <i class="fas fa-cloud-upload-alt fa-3x"></i>
                        <span class="mt-2 text-base leading-normal">T??l??charger une image</span>
                        <input name="image_path" type='file' class="hidden" />
                    </label>
                    @error('image_path')
                        <p class="text-red-500 text-base font-semibold mt-4">
                            {{ $message}}
                        </p>
                        @enderror
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-green-500 sm:py-4">
                            {{ __("D??poser") }}
                        </button>

                    </div>
            </form>
        </div>
    </div>
@endsection