@extends('layouts.myApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-1 text-center"> Тайтл - {{ $cartoon->title }} </h1>

            <div class="row m-3">
                <div class="col col-3">
                    <a class="btn btn-primary w-100" href="/cartoons">
                        Назад
                    </a>
                </div>
            </div>

            <div class="row">
                <p class="display-6"> Тип: {{ $cartoon->category->name }} </p>
                <p class="display-6"> Описание: {{ $cartoon->description }} </p>
            </div>

            @if (!empty($cartoon->chapters->all()))
                <div class="row">
                    <div class="col">
                        <h4 class="display-3 text-center"> Главы </h4>
                    </div>
                </div>

                <div class="row">
                    @foreach($cartoon->chapters as $chapter)
                        <a class="fs-4 mb-3" href="{{route('chapters.show', [
                                'cartoon' => $cartoon->id,
                                'chapter' => $chapter->id,
                            ])}}"> {{ $chapter->title }} </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
