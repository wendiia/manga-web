@extends('layouts.myApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-1 text-center"> {{ $category }} </h1>

            @foreach($cartoons as $cartoon)
                <div class="mb-4" style="border: 1px solid #000000; border-radius: 10px">
                    <a href="/cartoons/{{$cartoon->id}}"><h5 class="fs-4"> {{ $cartoon->title }} </h5></a>
                    <p> {{ $cartoon->category->name }} </p>
                    <p> {{ $cartoon->description }} </p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
