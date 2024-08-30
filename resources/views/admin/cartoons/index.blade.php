@extends('layouts.adminApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="container align-center">
                <section class="mb-4">
                    <h3 class="text-center display-5 mb-4"> Админ-панель комиксов </h3>
                    <h4 class="text-center text-primary fs-5 mb-4"> Добро пожаловать, {{ auth()->user()->name }} </h4>

                    <table class="table table-light align-middle">
                        <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col"> Тип комикса</th>
                            <th class="text-center" scope="col"> Название</th>
                            <th class="text-center" scope="col"> Описание</th>
                            <th class="text-center" scope="col">Редактирование</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cartoons as $cartoon)
                            <tr>
                                <th class="text-center" scope="row"> {{$cartoon->id}}  </th>
                                <td class="text-center"> {{ $cartoon->category->name }} </td>
                                <td class="text-center"> {{ $cartoon->title }} </td>
                                <td class="text-center"> {{ $cartoon->description }} </td>
                                <td class="text-center d-flex">
                                    <a href="/admin/cartoons/{{ $cartoon->id }}/edit" class="btn btn-primary me-3">
                                        Изменить
                                    </a>


                                    <form action="{{ route('admin.cartoons.delete',$cartoon->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger " value="Удалить">
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a href="/admin/cartoons/create" class="btn btn-primary"> Создать комикс </a>

                </section>
            </div>
        </div>
    </div>
@endsection
