@extends('layouts.app')

@section('title', 'Все тайтлы')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-1 text-center"> {{ $type }} </h1>

            @foreach($titles as $title)
                <div class="mb-4" style="border: 1px solid #000000; border-radius: 10px">
                    <a href="/titles/{{$title->id}}"><h5 class="fs-4"> {{ $title->title }} </h5></a>
                    <p> {{ $title->type->name }} </p>
                    <p> {{ $title->description }} </p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
