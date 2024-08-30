@extends('layouts.adminApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="container align-center">
                <section class="mb-4">
                    <h3 class="text-center display-5 mb-4"> Создание комикса </h3>

                    <form action="/admin/cartoons" method="post">
                        @csrf
                        @method('POST')
                        <div class="modal-body mb-5">
                            <label for="category"> Тип комикса: </label>
                            <select name="category_id" id="category" class="form-select" aria-label="select example">
                                <option> Выберите тип </option>
                                @if (!empty($categories))
                                    @foreach ($categories as $category)
                                        <option {{$category->id === 0 ?'selected': '' }}
                                                value="{{ $category->id }}"> {{ $category->title }} </option>
                                    @endforeach
                                @endif
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="title"> Название: </label>
                            <input class="form-control" id="title" name="title" type="text">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="description"> Описание: </label>
                            <input class="form-control" id="description" name="description" type="text">
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <a href="/admin/cartoons" class="btn btn-primary"> Назад </a>
                        <button type="submit" class="btn btn-success"> Сохранить </button>

                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection
