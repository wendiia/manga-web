@extends('layouts.myApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-1 text-center"> {{ $chapter->cartoon->title . " - " . $chapter->title }} </h1>

            <div class="row m-3">
                <div class="col col-2">
                    <a class="btn btn-primary w-100"
                       href="{{ route('cartoons.show', ['cartoon' => $chapter->cartoon->id]) }}">
                        Назад
                    </a>
                </div>
            </div>

            <div class="row">

                <div class="col" style="border: 1px solid #000000; border-radius: 10px">
                    @foreach($chapter->pages as $page)
                        <p> {{ $page->url }} </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
