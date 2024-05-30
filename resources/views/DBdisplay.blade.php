@extends('layout.layout')
@section('content')
    <div class="container">
        <h1 class="">MultiverseMarket</h1>
    </div>

    <div class="container my-custom-table">

        @foreach ($data as $user)
            <div class="row">
                <div class="col-md p-1">
                    <div class="p-3 border bg-light">{{ $user->name }}</div>
                </div>
                <div class="col-md p-1">
                    <div class="p-3 border bg-light">{{ $user->email }}</div>
                </div>
                <div class="col-md p-1">
                    <div class="p-3 border bg-light">{{ $user->status }}</div>
                </div>
                <div class="col-md p-1">
                    <a class="btn btn-danger d-flex justify-content-center align-items-center h-100"
                        href="/deleteuser/{{ $user->id }}">Удалить
                        пользователя</a>
                </div>
            </div>
        @endforeach

        <div class="row ">
            <!-- <button type="button" class="btn btn-danger col" data-bs-toggle="modal" data-bs-target="#DeleteUser">Delete</button> -->
            <a class="btn btn-success col m-1" href="{{ route('add_user') }}">Добавить пользователя</a>
        </div>
    </div>

    </div>
@endsection
