@extends('layouts.app')

@section('title', "Тайтл - $title->title")

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-1 text-center"> Тайтл {{ $title->title }} </h1>

            <div class="row m-3">
                <div class="col col-3">
                    <a class="btn btn-primary w-100" href="{{url()->previous()}}">
                        Назад
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-4 p-3" style="border: 1px solid #000000; border-radius: 10px">
                        <h5 class="fs-4"> {{ $title->title }} </h5>
                        <p> Тип: {{ $title->type->name }} </p>
                        <p> Описание: {{ $title->description }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
