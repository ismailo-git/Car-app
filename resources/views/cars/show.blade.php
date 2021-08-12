@extends('layouts.app')


@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="my-15">
            <h1 class="text-4xl">{{$car->title}}</h1>
            <p class="text-gray-700 text-base leading-8">{{$car->description}}</p>
        </div>
    </div>
@endsection

