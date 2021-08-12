@extends('layouts.app')


@section('content')
    <div class="container mx-auto pt-8">
             @if (session()->has('message'))
                <div class="w-full m-auto mt-3 pl-2">
                    <p class="w-full mb-4 text-white font-semibold bg-green-500 rounded py-4">
                    
                        {{ session()->get('message')}}
                    </p>
                </div>
            @endif

            <div>
        <div class="grid grid-cols-2 gap-8 items-center">
            @if ($cars->count())
            @foreach ($cars as $car)
            <div>
                 <img src="{{asset('images/'.$car->image_path)}}" class="rounded-2xl"/>
            </div>
            <div>
                        <p class="text-3xl text-red-900">{{ $car->title}}</p>
                        <p>{{$car->description}}
                        <p>{{$car->price}}</p>
                        <p>{{$car->kilometrage}}</p>
                        <p>{{$car->carburant}}</p>
                        <p>{{$car->marque}}</p>
                        <p>{{$car->modele}}</p>
                        <p>{{$car->user->name}}

             <a href="/cars/{{$car->slug}}" class="uppercase">Keep reading</a>

             @if (isset(Auth::user()->id) && Auth::user()->id == $car->user_id)
                 <span class="flot-right">
                    <a href="/cars/{{ $car->slug}}/edit" class="text-gray-700 pb-1 border-b-2">
                        Modifier
                    </a>
                 </span>
             @endif
            </div>
            @endforeach      
            {{ $cars->links()}}
         @else
            <p>The are no cars</p>
         @endif      
        </div>
    </div>
@endsection

@section('content')
    {{-- <div class="flex justify-center">
        <div class="w-10/12 bg-gray-700 p-8 rounded m-4">
            @if (session()->has('message'))
                <div class="w-full m-auto mt-3 pl-2">
                    <p class="w-full mb-4 text-white font-semibold bg-green-500 rounded py-4">
                    
                        {{ session()->get('message')}}
                    </p>
                </div>
            @endif

            <div>
            
            @if ($cars->count())
            @foreach ($cars as $car)
                <div class="flex justify-center">
                    <div class="flex flex-1">
                        <img src="{{asset('images/'.$car->image_path)}}" class="w-2/4" />
                    </div>
                    <div>
                        <p>{{ $car->title}}</p>
                        <p>{{$car->description}}
                        <p>{{$car->price}}</p>
                        <p>{{$car->kilometrage}}</p>
                        <p>{{$car->carburant}}</p>
                        <p>{{$car->marque}}</p>
                        <p>{{$car->modele}}</p>
                    </div>
                
                </div>
            @endforeach      
            {{ $cars->links()}}
         @else
            <p>The are no cars</p>
         @endif      
            </div>
        </div>
    </div> --}}
@endsection